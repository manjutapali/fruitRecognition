#include <stdio.h>
#include <unistd.h>
#include <getopt.h>
#include <iostream>
#include <cv.h>
#include <highgui.h>
#include<fstream>
 
using namespace cv;
using namespace std;
int main()
{	ifstream myfile;
	myfile.open("border1.txt",ios::in);
	 String imname = "";
	myfile>>imname;
	int xstart,xend,ystart,yend;
	myfile>>xstart;
	myfile>>xend;
	myfile>>ystart;
	myfile>>yend;
	myfile.close();
 	Mat img_rgb = imread(imname,1);
    	if(img_rgb.empty())
    	{
	 cerr << "Error: Loading image" << endl;
	  return 0;
	}
    
	int sumhue=0;
	int sumsat=0;
	int counter=0;
	//cout<<xstart<<xend;
	if((img_rgb.cols>800 )|| (img_rgb.rows>800))	
	resize(img_rgb, img_rgb, Size(800, 800));
	img_rgb = img_rgb(Rect(xstart,ystart,xend-xstart,yend-ystart));		
//	
	//resize(img_rgb, img_rgb, Size(800, 800));
	imwrite("Cropped_Image.jpg",img_rgb);
	namedWindow("win1", CV_WINDOW_AUTOSIZE);
		
	imshow("win1", img_rgb);
	waitKey(0);

	Mat img_hsv;	
	cvtColor(img_rgb,img_hsv,CV_BGR2HSV);
	
	imwrite( "Gray_Image.jpg", img_hsv );	
	resize(img_hsv, img_hsv, Size(img_hsv.cols/2, img_hsv.rows/2));	
	namedWindow("win1", CV_WINDOW_AUTOSIZE);
	imshow("win1", img_hsv);
waitKey(0);
	
	IplImage* src=cvLoadImage("Gray_Image.jpg",1);
	vector<cv::Mat> v_channel;
	split(src,v_channel);  	

	for (int i=1;i<img_rgb.cols;i++)      
	{
    		for (int j=xstart;j<xend;j++)
    		{
     		   sumhue+=(int) v_channel[0].at<uchar>(i,j);
		   //sumsat+=(int) v_channel[2].at<uchar>(i,j);
			counter++;
		}
	}
//cout<< (int) v_channel[0].at<uchar>(i,j)<<endl;
//Mat cropedImage = fullImage(Rect(X,Y,Width,Height));

//waitKey(0);

cout<<"Average hue is :"<<(sumhue/counter)<<endl;
ofstream myfile1 ("Query.txt",ios::out);
	myfile1<<(sumhue/counter)<<endl;
	myfile1.close();
//cout<<"Average saturation is :"<<(sumsat/counter);
	return 0;
}		
