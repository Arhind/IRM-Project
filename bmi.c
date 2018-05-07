#include<stdio.h>

void main()
{
float w,h,bmi;

printf("Enter weight in kgs and height in meters :\n");
scanf("%f%f",&w,&h);

bmi=w/(h*h);

printf("bmi: %f\n",bmi);

bmi<18.5?printf("Underweight\n"):(bmi<25)?printf("Normal weight\n"):(bmi<30)?printf("Overweight\n"):printf("Obesity\n");
}
