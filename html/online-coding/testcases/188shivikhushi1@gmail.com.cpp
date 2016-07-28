#include<iostream.h>
#include<conio.h>
void main()
{int r,c,a[10][10];
 cout<<"enter the number of rows and comlumns"<<endl;
 cin>>r>c;
 cout<<r<<c;
cout<<"\n entre the elements of matrix";
 for(int i=0;i<r;i++)
 {
   for(int j=0;j<c;j++)
   {
     cin>>a[i][j];
   }
 }
 for(int i=r;i>0;i--)
 {
   for(int j=0;j<c;j++)
     cout<<a[i][j];
 }
 
}