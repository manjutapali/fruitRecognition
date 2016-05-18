#include <cv.h>
#include <highgui.h>
 #include <iostream>
 #include "cvaux.h"
#include <fstream>
 
 using namespace std;
 using namespace cv;
 
 int main( int argc, char** argv )
{

    char* filename = argv[1];
    IplImage* inputIm = cvLoadImage(filename);
    IplImage* grayIm = cvCreateImage(cvSize(inputIm->width, inputIm->height), IPL_DEPTH_8U,1);
    cvCvtColor(inputIm, grayIm, CV_RGB2GRAY);
    CvGLCM* glcm = cvCreateGLCM(grayIm,1,NULL,4,CV_GLCM_OPTIMIZATION_LUT);
    cvCreateGLCMDescriptors(glcm, CV_GLCMDESC_OPTIMIZATION_ALLOWDOUBLENEST);
    double d = cvGetGLCMDescriptor(glcm, 0, CV_GLCMDESC_HOMOGENITY );
    double a = 1; double *ave = &a;
    double s = 1; double *sd = &s;
    cvGetGLCMDescriptorStatistics(glcm, CV_GLCMDESC_ENERGY, ave, sd);
    cout << "Energy "<<*ave<<endl;
	ofstream myfile;
	myfile.open("Query.txt",ios::app);
	myfile<<*ave;
	myfile<<endl;
	myfile.close();
    cvGetGLCMDescriptorStatistics(glcm, CV_GLCMDESC_ENTROPY, ave, sd);
     cout << "Entropy "<<*ave<<endl;
	myfile.open("Query.txt",ios::app);
	myfile<<*ave;
	myfile<<endl;
	myfile.close();
cvGetGLCMDescriptorStatistics(glcm, CV_GLCMDESC_CLUSTERTENDENCY, ave, sd);
     cout << "CLUSTERTENDENCY "<<*ave << " " << *sd<<endl;
	myfile.open("Query.txt",ios::app);
	myfile<<*ave;
	myfile<<endl;
	myfile.close();
cvGetGLCMDescriptorStatistics(glcm, CV_GLCMDESC_HOMOGENITY, ave, sd);
     cout << "Homogenity "<<*ave << " " << *sd<<endl;
	myfile.open("Query.txt",ios::app);
	myfile<<*ave;
	myfile<<endl;
	myfile.close();

cvGetGLCMDescriptorStatistics(glcm, CV_GLCMDESC_CORRELATION, ave, sd);
     cout << "CORRELATION "<<*ave << " " << *sd<<endl;
	myfile.open("Query.txt",ios::app);
	myfile<<*ave;
	myfile<<endl;
	myfile.close();
cvGetGLCMDescriptorStatistics(glcm, CV_GLCMDESC_MAXIMUMPROBABILITY, ave, sd);
     cout << "MAXIMUMPROBABILITY "<<*ave << " " << *sd<<endl;
	myfile.open("Query.txt",ios::app);
	myfile<<*ave;
	myfile<<endl;
	myfile.close();
    cvGetGLCMDescriptorStatistics(glcm, CV_GLCMDESC_CONTRAST, ave, sd);
     cout << "Contrast "<<*ave << " " << *sd<<endl;
	myfile.open("Query.txt",ios::app);
	myfile<<*ave;
	myfile<<endl;
	
	myfile.close();
	

/*cvGetGLCMDescriptorStatistics(glcm, CV_GLCMDESC_CORRELATIONINFO2, ave, sd);
     cout << "CORRELATIONINFO2 "<<*ave << " " << *sd<<endl;
	myfile.open("QueryCorrelationinfo2.txt",ios::app);
	myfile<<*ave<<" "<<*sd;
	myfile<<endl;
	myfile.close();*/

    return 0;
}
		
