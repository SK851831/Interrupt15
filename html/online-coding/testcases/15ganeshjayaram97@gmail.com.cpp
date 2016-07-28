#include<iostream>
using namespace std;
int main()
{
 unsigned long long int n,l[1010],i,c=0;
  cin>>n;
  for(i=1;i<=n;i++)
  {
    cin>>l[i];
    while(l[i]>0)
    {
      if(l[i]>=10)
      {
        l[i]-=10;
        c+=1;
      }
      else if(l[i]>=7 && l[i]<10)
      {l[i]-=7;c+=1;
      }
      else if(l[i]>=5 && l[i]<7)
      {l[i]-=5;c+=1;
      }
      else
      {l[i]-=1;c+=1;}
    }
    cout<<c<<endl;
      c=0;
  }
  return 0;
}
