#include <iostream>
 using namespace std;

 int main() {
  int N,a,A[4]={1, 5, 7, 10};
  cin>>N;
  while(N--)
  {
   cin>>a;
   int sum = 0;
   for(int i=3;i>=0;i--)
   {
    sum+=a/A[i];
    a=a%A[i];
   }
   cout<<sum<<endl;
  }
  return 0;
 }