#include<iostream.h>
#include<conio.h>
void main()
{
  int r,c;
  clrscr();
  printf("Enter the no.of rows and columns");
  scanf("%d %d",&r,&c);
  float a[r][c];

  int p = 0, q = 0;

  while (p < i) {
    while (q < j) {
      cout << "Enter the" << p + 1 << "*" << q + 1 << "entry";
      cin >> l[r][c];
void spiralPrint(int m, int n, int a[R][C])
{
    int i, k = 0, l = 0;
  while (k < m && l < n)
    {
    if ( k < m)
        {
            for (i = n-1; i >= l; --i)
            {
                printf("%d ", a[m-1][i]);
            }
            m--;
        }