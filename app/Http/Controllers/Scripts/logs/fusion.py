import pandas as pd
import numpy as np
import os
import glob


TIME_WINDOW = 15
NO_ROWS_TO_MERGE = TIME_WINDOW*60

path = os.getcwd()
csv_files = glob.glob(os.path.join(path, "/files_to_fuse/*.csv"))

AveragedOutFiles = []
  
# looping over all data source csv files
for f in csv_files:
      
    # read the DS csv file
    df = pd.read_csv(f)
    avgedFile = df.groupby(np.arange(len(df))//3).mean()

    AveragedOutFiles.push(avgedFile)