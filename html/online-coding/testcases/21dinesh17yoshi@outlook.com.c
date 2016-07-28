#include<stdio.h>
int main()
{
  int x1=1,x2=5,x3=7;
  int ans;
  int no;
  int rem=0,quo=0;
  int count=0;
  int mid;
  printf("Enter the no:");
  scanf("%d",&no);
  if( no )
  {
    if( no>=10 )
    {
    	quo=no/10;
    	rem=no%10;
    }
    else
      rem=no;
  }
  while( rem!=0  )
  { 
    mid=rem;
  	if( ( mid==x1 || mid>x1 ) && mid<x2 )
    {
      mid=mid-x1;
      
    }
    else if( mid>=x2 && mid<x3 )
    {
       mid=mid-x2;
       
    }
    else if( mid>=x3 )
    {
      mid=mid-x3;
      
    }
    count=count+1;
    rem=mid;
  }      
       
      printf("The Total no of Bottles needed:%d",(quo+count));
      return 0;
}
       