import pandas as pd
import numpy as np
import os, glob

os.chdir("files_to_fuse")

TIME_WINDOW = 15
NO_ROWS_TO_MERGE = TIME_WINDOW * 60

path = os.getcwd()
extension = "csv"
csv_files = [i for i in glob.glob("*.{}".format(extension))]

AveragedOutFiles = []

# looping over all data source csv files
for filename in csv_files:
    print(filename)
    # read the DS csv file
    # df = pd.read_csv(filename)

    # s = len(df) // 3
    # m = s
    # k = 0
    # a = []
    # for i in range(3):
    #     print(df.iloc[k:s, 2:-1].mean())
    #     z = list(df.iloc[k:s, 2:-1].mean())
    #     z = ["%.3f" % elm for elm in z]
    #     a.append(z)
    #     k += m
    #     s += m

    # newFile = pd.DataFrame(a, columns=["a", "b", "c", "d", "e", "f", "g"])
    # newFile.to_csv(filename, index=False, encoding="utf-8-sig")

    # avgedFile = df.groupby(np.arange(len(df))//3).mean()
