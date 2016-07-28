#include<stdio.h>
int main()
{
	long int array[4]={10,7,5,1},i,n,val,count,k=0,j=0;
	scanf("%ld",&n);
	for(i=0;i<n;i++)
	{
		count=0;
		scanf("%ld",&val);
		for(j=0;j<4;j++)
		{
			k=j;
			while(val>=array[k])
			{
				val=val-array[k];
			//	printf("\n %d",val);
				count++;
			}
		}
		printf("%ld \n",count);
	}
	return 0;
}