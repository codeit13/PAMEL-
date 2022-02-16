#!/bin/bash

sheetID=$1
sheetName=$2
newFilename=$3

wget --output-document=files_to_fuse/$newFilename.csv "https://docs.google.com/spreadsheets/d/$sheetID/gviz/tq?tqx=out:csv&sheet=$sheetName"

echo "/files_to_fuse/$newFilename.csv"