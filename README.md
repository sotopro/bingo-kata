Bingo Kata
The Kata
1
Bingo is a game of chance played using cards with numbers printed on them, which are marked off of the card as the
caller reads out some manner of random numbers. Play usually ceases once a certain pattern is achieved on a card,
where the winner will shout out "Bingo!" in order to let the caller and the room know that there may be a winner.
There are lots of different variations of Bingo, each with their own specific rules. Classic US Bingo is perhaps the most
well known, where the game is played using a 5x5 grid of numbers between 1 and 75, with a FREE space in the
middle. There is also a UK version of Bingo, which uses a 9x3 grid of spaces containing numbers between 1 and 90, of
which five spaces on each row are filled in.
Feature 1 - Playing Bingo
To get the best reach for our Bingo game, we are going to model it on the US version to begin with. To make this
work, we are going to need to be able to call out numbers, generate Bingo cards for people to play with, and check
their cards when someone calls Bingo. Once we have got these basics in place, we can then start to add new features
or tweak the way it works.
Calling Bingo Numbers
As a VP of Gaming
I want my game to call out Bingo numbers
So that people can play with their cards
● Given I have a Bingo caller
When I call a number
Then the number is between 1 and 75 inclusive
● Given I have a Bingo caller
When I call a number 75 times
Then all numbers between 1 and 75 are present
And no number has been called more than once
Generating Bingo Cards
As a VP of Gaming
I want my game to generate random Bingo cards
So that people can play
● Given I have a Bingo card generator
When I generate a Bingo card
Then the generated card has 25 unique spaces
1source: https://github.com/coulas/Craftsmanship/blob/master/Katas/others/agileKatas/bingo-kata.html
TDDBUDDY.COM
And column $column only contains numbers between $lowerBound and $upperBound inclusive
And the generated card has 1 FREE space in the middle
Column Lower Bound Upper Bound
B 1 15
I 16 30
N 31 45
G 46 60
O 61 75
Checking Bingo Cards
As a VP of Gaming
I want my game to check player's cards when they call Bingo
So that a winner can be decided
● Given a player calls Bingo after all numbers on their card have been called
When I check the card
Then the player is the winner
● Given a player calls Bingo before all numbers on their card have been called
When I check the card
Then the player is not the winner