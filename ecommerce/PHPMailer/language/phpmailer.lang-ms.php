     : Delphi v3.0x or higher is being used. *)
(* DFS_DELPHI_4         : Delphi v4.0x is being used. *)
(* DFS_DELPHI_4_UP      : Delphi v4.0x or higher is being used. *)
(* DFS_DELPHI_5         : Delphi v5.0x is being used. *)
(* DFS_DELPHI_5_UP      : Delphi v5.0x or higher is being used. *)
(* DFS_DELPHI_6         : Delphi v6.0x is being used. *)
(* DFS_DELPHI_6_UP      : Delphi v6.0x or higher is being used. *)
(* **************************************************************************** *)

{ All DFS components rely on complete boolean eval compiler directive set off. }
{$B-}
{$DEFINE DELPHI_FREE_STUFF}
{$IFDEF WIN32}
{$DEFINE DFS_WIN32}
{$ELSE}
{$DEFINE DFS_WIN16}
{$ENDIF}
{$IFDEF VER140}
{$DEFINE DFS_COMPILER_6}
{$DEFINE DFS_DELPHI}
{$DEFINE DFS_DELPHI_6}
{$ENDIF}
{$IFDEF VER130}
{$DEFINE DFS_COMPILER_5}
{$IFDEF BCB}
{$DEFINE DFS_CPPB}
{$DEFINE DFS_CPPB_5}
{$ELSE}
{$DEFINE DFS_DELPHI}
{$DEFINE DFS_DELPHI_5}
{$ENDIF}
{$ENDIF}
{$IFDEF VER125}
{$DEFINE DFS_COMPILER_4}
{$DEFINE DFS_CPPB}
{$DEFINE DFS_CPPB_4}
{$ENDIF}
{$IFDEF VER120}
{$DEFINE DFS_COMPILER_4}
{$DEFINE DFS_DELPHI}
{$DEFINE DFS_DELPHI_4}
{$ENDIF}
{$IFDEF VER110}
{$DEFINE DFS_COMPILER_3}
{$DEFINE DFS_CPPB}
{$DEFINE DFS_CPPB_3}
{$ENDIF}
{$IFDEF VER100}
{$DEFINE DFS_COMPILER_3}
{$DEFINE DFS_DELPHI}
{$DEFINE DFS_DELPHI_3}
{$ENDIF}
{$IFDEF VER93}
{$DEFINE DFS_COMPILER_2}  { C++B v1 compiler is really v2 }
{$DEFINE DFS_CPPB}
{$DEFINE DFS_CPPB_1}
{ .$DEFINE DFS_USEDEFSHLOBJ } { C++B 1 has the correct SHLOBJ.H, but
  SHLOBJ.PAS has errors so this isn't defined }
{$ENDIF}
{$IFDEF VER90}
{$DEFINE DFS_COMPILER_2}
{$DEFINE DFS_DELPHI}
{$DEFINE DFS_DELPHI_2}
{$ENDIF}
{$IFDEF VER80}
{$D