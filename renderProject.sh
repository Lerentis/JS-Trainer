#!/bin/bash
gource -1280x720 --multi-sampling --stop-at-end --highlight-users --hide mouse,progress --file-idle-time 0 --max-files 0 --font-size 22 --title "JS Trainer Development" --output-framerate 30 --key -o 
gource.ppm
optirun ffmpeg -y -r 60 -f image2pipe -vcodec ppm -i gource.ppm -vcodec libx264 -preset ultrafast -pix_fmt yuv420p -crf 1 -threads 0 -bf 0 gource.mp4
