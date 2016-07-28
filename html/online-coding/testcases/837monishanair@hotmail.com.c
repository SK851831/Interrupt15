
  #include <stdio.h>
 
int main()
{
	int matrix[4][4];
	int n;
	int i, j;
	int iIncr, jIncr;
	int num;
	int k;
	int m;
	scanf("%d", &n);
	if (n == 1)
	{
		printf("1\t\n");
		return 0;
	}
	if (n % 2 == 0)
	{
		i = 0;
		j = 0;
		iIncr = 0;
		jIncr = 1;
	}
	else
	{
		i = n - 1;
		j = n - 1;
		iIncr = 0;
		jIncr = -1;
	}
	m = n;
	num = n * n;
	while (num > 0)
	{
		for (k = 0; k < m; ++k)
		{
			matrix[i][j] = num;
			--num;
			i += iIncr;
			j += jIncr;
		}
		m--;
		i -= iIncr;
		j -= jIncr;
		iIncr = jIncr;
		jIncr = 0;
		i += iIncr;
		for (k = 0; k < m; ++k)
		{
			matrix[i][j] = num;
			--num;
			i += iIncr;
			j += jIncr;
		}
		i -= iIncr;
		j -= jIncr;
		jIncr = -iIncr;
		iIncr = 0;
		j += jIncr;
	}
	for (i = 0; i < n; ++i)
	{
		for (j = 0; j < n; ++j)
			printf("%d\t", matrix[i][j]);
		printf("\n");
	}
	return 0;
} 