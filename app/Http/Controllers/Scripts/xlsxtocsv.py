import getpass

print("WHICH USER ::::::::::::::::::::::::: ", getpass.getuser())

import pandas as pd
import os

FILES_DIR = "files"

ROOT = os.getcwd()
# DATA_DIR = os.path.join(ROOT, "../public/")

for filename in os.listdir(FILES_DIR):
    file = os.path.join(FILES_DIR, filename)
    if os.path.isfile(file):
        print(file, filename)
        fileArr = os.path.splitext(filename)
        if fileArr[1] == ".xlsx":
            print("XLSX_FOUND")
            read_file = pd.read_excel(file)
            newFileName = FILES_DIR + "/" + fileArr[0] + ".csv"
            read_file.to_csv(newFileName, index=None, header=True)
