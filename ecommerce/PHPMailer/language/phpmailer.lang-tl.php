ToInt(tFileZillaMain.Text)
  else
  begin
    ShowMessage('FileZilla Main: "' + tFileZillaMain.Text + '" is not a valid number.');
    error := True;
  end;
  if ValidatePort(tFileZillaAdmin.Text) then
    Config.ServicePorts.FileZillaAdmin := StrToInt(tFileZillaAdmin.Text)
  else
  begin
    ShowMessage('FileZilla Admin: "' + tFileZillaAdmin.Text + '" is not a valid number.');
    error := True;
  end;

  if ValidatePort(tMercuryP1.Text) then
    Config.ServicePorts.Mercury1 := StrToInt(tMercuryP1.Text)
  else
  begin
    ShowMessage('Mercury1: "' + tMercuryP1.Text + '" is not a valid number.');
    error := True;
  end;
  if ValidatePort(tMercuryP2.Text) then
    Config.ServicePorts.Mercury2 := StrToInt(tMercuryP2.Text)
  else
  begin
    ShowMessage('Mercury2: "' + tMercuryP2.Text + '" is not a valid number.');
    error := True;
  end;
  if ValidatePort(tMercuryP3.Text) then
    Config.ServicePorts.Mercury3 := StrToInt(tMercuryP3.Text)
  else
  begin
    ShowMessage('Mercury3: "' + tMercuryP3.Text + '" is not a valid number.');
    error := True;
  end;
  if ValidatePort(tMercuryP4.Text) then
    Config.ServicePorts.Mercury4 := StrToInt(tMercuryP4.Text)
  else
  begin
    ShowMessage('Mercury4: "' + tMercuryP4.Text + '" is not a valid number.');
    error := True;
  end;
  if ValidatePort(tMercuryP5.Text) then
    Config.ServicePorts.Mercury5 := StrToInt(tMercuryP5.Text)
  else
  begin
    ShowMessage('Mercury5: "' + tMercuryP5.Text + '" is not a valid number.');
    error := True;
  end;
  if ValidatePort(tMercuryP6.Text) then
    Config.ServicePorts.Mercury6 := StrToInt(tMercuryP6.Text)
  else
  begin
    ShowMessage('Mercury6: "' + t