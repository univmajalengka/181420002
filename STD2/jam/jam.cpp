#include <iostream>
using namespace std;

int main()
{
	//Var Waktu ke-1
	int hour1,minute1,second1;
	
	//Var Waktu ke-2
	int hour2,minute2,second2;
	
	//Total penjumlahan Waktu ke-1 dan ke-2
	int hour,minute,second;

	//Inputan Waktu ke-1
	cout<<"~Masukkan Waktu ke-1 : "<<endl;
	cout<<"Jam : "; cin>>hour1;
	cout<<"Menit : "; cin>>minute1;
	cout<<"Detik : "; cin>>second1;

	//Inputan Waktu ke-2
	cout<<"\n~Masukkan Waktu ke-2 :"<<endl;
	cout<<"Jam : "; cin>>hour2;
	cout<<"Menit : "; cin>>minute2;
	cout<<"Detik : "; cin>>second2;

	//Rumus Penjumlahan Waktu 1 & 2
	second=second1+second2;
	minute=minute1+minute2+(second/60);
	hour=hour1+hour2+(minute/60);
	minute=minute%60;
	second=second%60;

	//Tampilkan hasil
	cout<<"\n~Total Waktunya : "<<hour<<" jam "<<minute<<" menit "<<second<< " detik";

	return 0;
}