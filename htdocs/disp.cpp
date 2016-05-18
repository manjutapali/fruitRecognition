#include<stdio.h>
#include<iostream>
#include<fstream>

using namespace std;

int main(){
	float a;
	ifstream myfile;
	myfile.open("Query.txt",ios::in);
	while(myfile>>a)
	{
	std::cout << a<<"\n";
	}
}
