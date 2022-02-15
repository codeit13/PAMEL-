import pandas as pd
import sys, os

os.chdir("files_to_fuse")

filename = sys.argv[1].replace(" ", "_") + ".csv"

df = pd.read_csv(filename, low_memory=False)
df.sort_values(df.columns[0], axis=0, inplace=True)
uniqueActors = df["Actor"].unique()
aggregatedFile = []
index = -1

for actor in uniqueActors:
    index += 1
    actorDF = df.query('Actor == "' + actor + '"')
    header = ["Actor"]
    header += actorDF.columns.values.tolist()[1:]

    s = len(actorDF) // 3
    m = s
    k = 0
    for i in range(3):
        newRow = [actor]
        z = list(actorDF.iloc[k:s, :].mean())
        z = ["%.3f" % elm for elm in z]

        aggregatedFile.append(newRow + z)
        k += m
        s += m

df1 = pd.DataFrame(aggregatedFile, columns=header)
df1.to_csv(filename, index=False)
