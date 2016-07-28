#include<stdio.h>

void main()
{
  int l1,l2,d,i,j,k,m,demand;
  scanf("%d%d",&l1,&l2);
  j=l1%10;
  if(j==0)
  {
    k=l1/10;
    demand=k;
  }
  else if(j!=0)
  {
    k=l1/10;
    if(k<5)
    {
      demand=k+j;
    }
    else if(k>5&&k<7)
    {
      demand=j+2;
    }
    else{
      if(k==8)
      {
        demand=j+2;
      }
      else
      {
        demand=j+3;
      }}}
  printf("deamnd1 is:%d",demand);
  i=l2%10;
  if(i==0)
  {m=l2/10;
    demand=m;
  }
  else if(i!=0){
    m=l2/10;
    
    if(m<5)
    {demand=m+i;
    }
    if(m>5&&m<7)
    {demand=m+2;
    }
    if(m>7)
    {
      if(m==8)
      {demand=m+2;
      }
      else
      {
        demand=m+3;}
    }}
  printf("demand2:%d",demand);
  
}