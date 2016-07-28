#include<stdio.h>
main(){
int t,m,result;
scanf("%d",&t);
while(t--){
scanf("%d",&m);
result=m/10;
if((m%10)!=0)
result++;
printf("%d\n",result);

}
}