
void main()
{ int n,m,A[100][100];
  cin>>m>>n;
  for(int i=0;i<m;i++)
    for(int j=0;j<n;j++)
      cin>>A[i][j];
  int f=0,rl=cl=0,ru=n-1,cu=m-1;
 while(f!=m*n)
 {
   for(int i=rl;i<=ru;i++)
   {cout<<A[cu][i];f++;}
    cu--;
   for(int j=cu;j>=cl;j--)
   {cout<<A[j][ru];f++;}
   ru--;
   for(int k=ru;k>=rl;k--)
   {cout<<A[cl][k];f++;}
   cl++;
   for(int l=cl;l<=cu;l++)
   {cout<<A[l][rl];f++;}
   rl++;
 }
 
}