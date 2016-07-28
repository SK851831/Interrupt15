#include <stdio.h>

int main()
{
    long long int n,t,li[1001],i,c=0;
  scanf("%lld",&n);
  for(i=1;i<=n;i++){
    scanf("%lld",&li[i]);
    while(li[i]>0)
   {if(li[i]>=10){
     li[i]=li[i]-10;c++;}
     else if(li[i]>=7 && li[i]<10){
     li[i]=li[i]-10;c++;}
    else if(li[i]>=5 && li[i]<7){
     li[i]=li[i]-7;c++;}
    else if(li[i]==5){li[i]=li[i]-1;c++;}
    else{li[i]=li[i]-1;c++;
    }
   }
  printf("%lld\n",c);
   c=0;
  }
  
  return 0;
}