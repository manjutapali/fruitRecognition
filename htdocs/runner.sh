while read line           
do         
sh greybinbuild.sh
./grey-bin -k 0.11 $line _result500.jpg
sh build1.sh
./imcrop
sh buildhue.sh
./rgbt
sh build_glcm.sh
./glcm Cropped_Image.jpg
done < List.txt   
