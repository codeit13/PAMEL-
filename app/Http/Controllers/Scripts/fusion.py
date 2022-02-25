#!/usr/bin/python3

import pandas as pd
import numpy as np
import sys, os, glob

os.chdir("files_to_fuse")

fusedFileName = sys.argv[1].replace(" ", "_") + ".csv"

TIME_WINDOW = 15
NO_ROWS_TO_MERGE = TIME_WINDOW * 60

path = os.getcwd()
extension = "csv"
csv_files = [i for i in glob.glob("*.{}".format(extension))]

fusedFile = pd.read_csv("../template/Fusion.csv")
header = fusedFile.columns.values.tolist()

# looping over all data source csv files
for filename in csv_files:
    df = pd.read_csv(filename)
    headers = df.columns.values.tolist()
    del headers[0]
    if "Disgust" in headers:
        # Video Features
        actors = [x for x in df["Actor"].unique() if str(x) != "nan"]
        for actor in actors:
            actorRows = df.query("Actor == '" + actor + "'")
            rowCount = 0
            for index, row in actorRows.iterrows():
                actorIndex = fusedFile.index[fusedFile["Actor"] == actor].tolist()
                rowCount += 1
                for column in headers:
                    column_name = "A" + str(rowCount) + "_" + str(column)
                    fusedFile.at[actorIndex[0], column_name] = row[column]
    else:
        # Student & Teacher's Perception
        fusedFile = pd.concat([fusedFile, df])


newFile = pd.DataFrame(fusedFile, columns=header)
newFile.to_csv("../casesData/" + fusedFileName, index=False, encoding="utf-8-sig")

print(fusedFileName)
