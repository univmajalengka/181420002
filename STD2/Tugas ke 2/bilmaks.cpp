#include <iostream.h>
#include <conio.h>
#include <stdlib.h>
#include <time.h>
#include <math.h>

void main(){
    clrscr();
    const MAKS =10;
    int data[MAKS];
    int maks;

    randomize();
    for(int i=0;i<MAKS;i++){
        data[i]=rand();
    }
    cout<< "DATA : "<<endl;
    cout<<data[0]<<endl;
    maks = data[0];
    for(i=1;i<MAKS;i++){
        cout<<data[i]<<endl;
        if(data[i]>maks)
            maks=data[i];
    }
    cout<<"Data Terbesar = "<<maks<<endl;
}
