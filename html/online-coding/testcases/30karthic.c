#include<stdio.h>
#include<stdlib.h>
int **a;
void top(int *p,int *q, int n){
int i,j;

i=(*p);
for(j=0;j<n;j++,i--)
printf("%d ",a[i][*q]);
*p=i+1;
}
void bottom(int *p,int *q, int n){
int i,j;
i=(*p);
for(j=0;j<n;j++,i++)
printf("%d ",a[i][*q]);
*p=i-1;
}
void left(int *p,int *q, int n){
int i,j;
i=(*q);
for(j=0;j<n;j++,i--)
printf("%d ",a[*p][i]);
*q=i+1;
}
void right(int *p,int *q, int n){
int i,j;
i=(*q);
for(j=0;j<n;j++,i++)
printf("%d ",a[*p][i]);
*q=i-1;
}

main(){

int r,c;
int i,j,p,q,k;
int t=1;
scanf("%d%d",&r,&c);
a=(int**)malloc(sizeof(int*)*r);
for(i=0;i<r;i++)
a[i]=(int*)malloc(sizeof(int)*c);

for(i=0;i<r;i++)
for(j=0;j<c;j++)
scanf("%d",&a[i][j]);





k=r-1;
p=r-1;
q=0;
right(&p,&q,c);


for(i=0;i<(r*2-2);i++){

if(t){
p--;
top(&p,&q,k);
q--;
left(&p,&q,k);
k--;
t=0;
}else{
p++;
bottom(&p,&q,k);
q++;
right(&p,&q,k);
k--;
t=1;
}

}


}
