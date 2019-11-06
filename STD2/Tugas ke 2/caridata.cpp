#include <iostream.h>
#include <conio.h>

void main(){
    int i, x, ketemu;
    clrscr();

    int data[]=(5,100,20,31,77,88,99,20,55,1);

    cout<<"Data yang anda cari : ";
    cin>>x;

    ketemu=0;
    for(i=0;i < sizeof(data)/sizeof(int) ;i++){
        if(data[i]==x){
            ketemu = ! ketemu;
            break;
        }

    }
    if(ketemu)
        cout<<"Data tersebut ada pada posisi ke- "
        <<i+1<<endl;
    else
        cout<<"Data tersebut tidak ada !"<<endl;
    
}