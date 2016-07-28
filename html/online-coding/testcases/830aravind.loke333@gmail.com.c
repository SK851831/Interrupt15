#include<stdio.h>
int main()
{
	 int mat[10][10];
	 int i,j,n1,n2,count,ctr,spr;
	// printf("enter n1 and n2");
	 scanf("%d%d",&n1,&n2);
	for(i=0;i<n1;i++)
	    for(j=0;j<n2;j++)
	       scanf("%d",&mat[i][j]);
	count=n1*n2;  
	ctr=0; 
    spr=0;
    while(1)
   {
	 	for(i=(n1-1)-spr,j=0+spr;j<n2-spr;j++)
	 	{
	 		printf("%d ",mat[i][j]);
	 		ctr++;
	 		if(ctr==count)
		       return 0;
		 }
		 for(j=(n2-1)-spr,i=(n1-2)-spr;i>=(0+spr);i--)
		 {
		 	printf("%d ",mat[i][j]);
		 	ctr++; 
			if(ctr==count)
		       return 0;	 	
		 }
		 for(i=(0+spr),j=(n2-2)-spr;j>=(0+spr);j--)
		 {
		 	printf("%d ",mat[i][j]);
		 	ctr++;	
		 	if(ctr==count)
		        return 0;
		 }
		 for(j=0+spr,i=(1+spr);i<(n1-1)-spr;i++)
		 {
		   	printf("%d ",mat[i][j]);
		 	ctr++;	
		    if(ctr==count)
		       return 0;	
		 }
		  spr++;
	}         
}