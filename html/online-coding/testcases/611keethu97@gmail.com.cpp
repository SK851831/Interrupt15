#include<iostream.h>
#include<conio.h>
#define r 3
#define c 3
void main()
{
int ar[3][3],r,c,i,j;
  cout<<"no of rows&col "<<r<<c;
    cout<<"enter the elements";
  for(i=0;i<r;i++)
  {
    for(j=0;j<c;j++)
    {
      cin>>ar[i][j];
    }
  }
  cout<<"\n spiral \n";
  while(i=r-1)
  {
for(j=0;j<c;j++)
{
  if(i>=j)
  {
    cout<<ar[i][j];
  }
}
    while(j=c-1)
    {
      for(i=0;i<r;i++)
      {
        if(j>=i)
        {
          cout<<ar[i][j];
        }
      }
    }
while(i=0)
  {
for(j=c-1;j>=0;j--)
{
  if(i<=j)
  {
    cout<<ar[i][j];
  }
}
    while(j=0)
    {
      for(i=r-1;i>0;i--)
      {
        if(j<=i)
        {
          cout<<ar[i][j];
        }
      }
    }
  while(i=r-2)
  {
for(j=0;j<c-1;j++)
{
  if(i>=j)
  {
    cout<<ar[i][j];
  }
}
    while(j=c-2)
    {
      for(i=0;i<r-1;i++)
      {
        if(j>=i)
        {
          cout<<ar[i][j];
        }
      }
    }
    getch();
  }