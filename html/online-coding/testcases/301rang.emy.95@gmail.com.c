#include<stdio.h>
void main()
{
	int matrix[20][20],i,j;
	int c1,c2,r1,r2,element,r,c;
	printf("\nEnter r & c :");
	scanf("%d %d",&r,&c);
	element=1;
	r1=0; 
  	c1=0;
	r2=r - 1;
	c2=c - 1;
	while(r1<=r2&&c1<=c2)
	{
		i=r1;
		for(j=c1;j <=c2;j++)
		{
			matrix[i][j]=element++;	
			j=c2;
			for(i=r1+1;i<=r2;i++)
			{
				matrix[i][j]=element++;	
				if(r1!=r2)
				{
					i=r2;
					for(j=c2-1;j>=c1;j--)
					matrix[i][j]=element++;
				}	
				if (c1!=c2)
				{
					j = c1;
					for(i=r2-1;i>r1;i--)
					matrix[i][j] = element++;
				}
			}
		}
		r1++;r2++;
		c1--;c2--;
	}	
	printf("\n The matrix is\n");
	for(i=0;i < r;i++)
	{
		for(j=0;j<c;j++)
		{
			printf("%4d",matrix[i][j]);
			printf("\n");
		}		


	}
} 