#include <iostream.h>
#include <conio.h>
#include <iomanip.h>

void main (){
    int i,j,tmp,jumdata;
    clrscr();

    int data[]=(5,100,20,31,77,88,99,20,55,1);

    jumdata=sizeof(data) / sizeof(int);

    cout<<"data semula: "<<endl;
    for(i=0;i<jumdata;i++)
        cout<<setw(4) << data[i];
    cout<<endl;

    for(i=0;i<jumdata-1;i++)
        for(j=i+1;j<jumdata;j++)
            if(data[i]>data[j]){
                tmp=data[i];
                data[i]=data[j];
                data[j]=tmp;
            }
    
    cout<<"data setelah diurutkan : "<<endl;
    for(i=0;i<jumdata;i++)
        cout<<setw(4)<<data[i];
    cout<<endl;
}