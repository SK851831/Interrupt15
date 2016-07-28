#include<stdio.h>
#include<string.h>

main()
{
int m,n,i,j,left,right,top,down;

scanf("%d",&m);

scanf("%d",&n);
int **a;
a=(int*)malloc(m*sizeof(int*));
for (i=0;i<m;i++)
	a[i]=(int**)malloc(n*sizeof(int));
	
	
for (i=0;i<m;i++)
	{	for (j=0;j<n;j++)
			scanf("%d",&a[i][j]);
	}
	

left=0;
right=n;
top=0;
down=m;

while (1)	
	{   
		for (j=left;j<right;j++)
			printf ("%d ",a[top][j]);
         top++;
		if (left>right-1 || top>down-1) 
			break;
			
			
		for (i=top;i<down;i++) 
			printf ("%d ",a[i][right-1]);
		right--;
		if (left>right-1 || top>down-1) 
			break;
			
		for (j=right-1;j>=left;j--)
			printf ("%d ",a[down-1][j]);
		down--;
		if (left>right-1 || top>down-1) 
			break;
			
			
		for (i=down-1;i>=top;i--) 
			printf ("%d ",a[i][left]);
		left++;
		if (left>right-1 || top>down-1) 
			break;
	}	
printf ("\n");			
}