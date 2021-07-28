@echo off
reg add "Mark VIII\Control Panel\Desktop" /v Wallpaper /f /t REG_SZ /d C:\image\teste.bmp
RUNDLL32.EXE user32.dll,UpdatePerUserSystemParameters 
