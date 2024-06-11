egin
    hSvc := OpenService(hSCM, PChar(StrPas(ssa^[j].lpServiceName)), SERVICE_QUERY_STATUS);
    if hSvc > 0 then
    begin
      try
        if QueryServiceStatusEx(hSvc, SC_STATUS_PROCESS_INFO, @ssp, sizeof(ssp), dwSize) then
        begin
          if (ssp.dwProcessId = PID) then
          begin
            Result := GetServicePath(ssa^[j].lpServiceName);
            break;
          end;
        end
        else
          Result := 'Unable to query service';
      finally
        CloseServiceHandle(hSvc);
      end;
    end
    else
      Result := Format('Unable to open service: %s',[ssa^[j].lpServiceName]);
  end; { for j }

  Dispose(ssa);
  CloseServiceHandle(hSCM);
end;

function GetServiceStatus(name: string): TServiceStatus;
var
  hSCM: THandle;
  hService: THandle;
  ServiceStatus: _SERVICE_STATUS;
begin
  hSCM := OpenSCManager(nil, nil, SC_MANAGER_CONNECT);
  if (hSCM = 0) then
  begin
    Result := ssError;
    exit;
  end;

  hService := OpenService(hSCM, @name[1], SERVICE_QUERY_STATUS);;
  if (hService = 0) then
  begin
    CloseServiceHandle(hSCM);
    Result := ssNotFound;
    exit;
  end;

  // The SERVICE exists and we have access

  if (QueryServiceStatus(hService, ServiceStatus)) then
  begin
    Result := ssUnknown;
    if (ServiceStatus.dwCurrentState = SERVICE_RUNNING) then
      Result := ssRunning;
    if (ServiceStatus.dwCurrentState = SERVICE_STOPPED) then
      Result := ssStopped;
  end
  else
  begin
    Result := ssError;
  end;

  CloseServiceHandle(hService);
  CloseServiceHandle(hSCM);
end;

//function ServiceDelete(name: string): boolean;
//var
//  hSCM: THandle;
//  hService: THandle;
//begin
//  Result := False;
//  hSCM := OpenSCManager(nil, nil, SC_MANAGER_CONNECT);
//  if (hSCM = 0) then
//    exit;
//
//  hService := OpenService(hSCM, @name[