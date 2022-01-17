import pandas as pd
import os, json

ROOT = os.getcwd()
DATA_DIR = os.path.join(ROOT, "../storage/app/")

paths = json.load(open(os.path.join(DATA_DIR, "public/paths.json")))
print(paths)


# read_file = pd.read_excel("Test.xlsx")

# read_file.to_csv("Test.csv", index=None, header=True)

# df = pd.DataFrame(pd.read_csv("Test.csv"))

# df.to_csv("csvfile.csv", encoding="utf-8", index=True)
