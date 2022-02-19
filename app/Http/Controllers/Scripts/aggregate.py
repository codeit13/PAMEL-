#!/usr/bin/python3

import sys, os
import glob
import pandas as pd

# set working directory
os.chdir("files")

# find all csv files in the folder
# use glob pattern matching -> extension = 'csv'
# save result in list -> all_filenames
extension = "csv"
all_filenames = [i for i in glob.glob("*.{}".format(extension))]
# print(all_filenames)

if all_filenames:
    # combine all files in the list
    # combined_csv = pd.concat([pd.read_csv(f) for f in all_filenames])

    arr = []

    for filename in all_filenames:
        csv_file = pd.read_csv(filename)
        if len(all_filenames) > 1:
            csv_file.pop("Frame")
        csv_file["Actor"] = csv_file["Actor"].fillna(csv_file["Actor"][0])

        arr.append(csv_file)

    combined_csv = pd.concat(arr)

    # export to csv
    filename = sys.argv[1].replace(" ", "_") + ".csv"
    combined_csv.to_csv(
        "files_to_fuse/" + filename, index=False, encoding="utf-8-sig"
    )
    # print("/files_to_fuse/aggregatedFile.csv")
    print("/files_to_fuse/" + filename)
else:
    print("_NO_CSV_FILE_AVAILABLE__")
