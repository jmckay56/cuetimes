Taco Tuesday


It's Taco Tuesday, and there is a line of people who need tacos.

Your task is write a function, a class, or classes to calculate the total time required for all the customers to place their order!  

There are two input variables: * customers: an array of positive integers representing the line.

Each index in the array represents a customer, and its value represents the amount of time for that customer to place their order.

The array order matters: it's first come, first served.
 * registers: a positive integer, the number of available cash registers with cashiers.

  The function should return an integer: the total time required to take all orders.  

Assume that the front person in the line proceeds to a register as soon as it becomes free.
So, for example:

lineTime([5,3,4], 1); 
// should return 12 
// because when registers=1, the total time is just the sum of the times

  lineTime([10,2,3,3], 2); 
// should return 10 
// because here registers=2 and the 2nd, 3rd, and 4th people in the line finish ordering before the 1st person has finished