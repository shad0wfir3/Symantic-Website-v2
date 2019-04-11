<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $qoutes = [
            [
                "author" => "Thomas Edison",
        "quote" => "Genius is one percent inspiration and ninety-nine percent perspiration."
    ],
    [
        "author" => "Yogi Berra",
        "quote" => "You can observe a lot just by watching."
    ],
    [
        "author" => "Abraham Lincoln",
        "quote" => "A house divided against itself cannot stand."
    ],
    [
        "author" => "Johann Wolfgang von Goethe",
        "quote" => "Difficulties increase the nearer we get to the goal."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "Fate is in your hands and no one elses"
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "Be the chief but never the lord."
    ],
    [
        "author" => "Carl Sandburg",
        "quote" => "Nothing happens unless first we dream."
    ],
    [
        "author" => "Aristotle",
        "quote" => "Well begun is half done."
    ],
    [
        "author" => "Yogi Berra",
        "quote" => "Life is a learning experience, only if you learn."
    ],
    [
        "author" => "Margaret Sangster",
        "quote" => "Self-complacency is fatal to progress."
    ],
    [
        "author" => "Buddha",
        "quote" => "Peace comes from within. Do not seek it without."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "What you give is what you get."
    ],
    [
        "author" => "Iris Murdoch",
        "quote" => "We can only learn to love by loving."
    ],
    [
        "author" => "Karen Clark",
        "quote" => "Life is change. Growth is optional. Choose wisely."
    ],
    [
        "author" => "Wayne Dyer",
        "quote" => "You'll see it when you believe it."
    ],
    [
        "author" => "Unknown",
        "quote" => "Today is the tomorrow we worried about yesterday."
    ],
    [
        "author" => "Unknown",
        "quote" => "It's easier to see the mistakes on someone else's paper."
    ],
    [
        "author" => "Unknown",
        "quote" => "Every man dies. Not every man really lives."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "To lead people walk behind them."
    ],
    [
        "author" => "William Shakespeare",
        "quote" => "Having nothing, nothing can he lose."
    ],
    [
        "author" => "Henry J. Kaiser",
        "quote" => "Trouble is only opportunity in work clothes."
    ],
    [
        "author" => "Publilius Syrus",
        "quote" => "A rolling stone gathers no moss."
    ],
    [
        "author" => "Napoleon Hill",
        "quote" => "Ideas are the beginning points of all fortunes."
    ],
    [
        "author" => "Donald Trump",
        "quote" => "Everything in life is luck."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "Doing nothing is better than being busy doing nothing."
    ],
    [
        "author" => "Benjamin Spock",
        "quote" => "Trust yourself. You know more than you think you do."
    ],
    [
        "author" => "Confucius",
        "quote" => "Study the past, if you would divine the future."
    ],
    [
        "author" => "Unknown",
        "quote" => "The day is already blessed, find peace within it."
    ],
    [
        "author" => "Sigmund Freud",
        "quote" => "From error to error one discovers the entire truth."
    ],
    [
        "author" => "Benjamin Franklin",
        "quote" => "Well done is better than well said."
    ],
    [
        "author" => "Ella Williams",
        "quote" => "Bite off more than you can chew, then chew it."
    ],
    [
        "author" => "Buddha",
        "quote" => "Work out your own salvation. Do not depend on others."
    ],
    [
        "author" => "Benjamin Franklin",
        "quote" => "One today is worth two tomorrows."
    ],
    [
        "author" => "Christopher Reeve",
        "quote" => "Once you choose hope, anythings possible."
    ],
    [
        "author" => "Albert Einstein",
        "quote" => "God always takes the simplest way."
    ],
    [
        "author" => "Charles Kettering",
        "quote" => "One fails forward toward success."
    ],
    [
        "author" => "Unknown",
        "quote" => "From small beginnings come great things."
    ],
    [
        "author" => "Chinese proverb",
        "quote" => "Learning is a treasure that will follow its owner everywhere"
    ],
    [
        "author" => "Socrates",
        "quote" => "Be as you wish to seem."
    ],
    [
        "author" => "V. Naipaul",
        "quote" => "The world is always in movement."
    ],
    [
        "author" => "John Wooden",
        "quote" => "Never mistake activity for achievement."
    ],
    [
        "author" => "Haddon Robinson",
        "quote" => "What worries you masters you."
    ],
    [
        "author" => "Pearl Buck",
        "quote" => "One faces the future with ones past."
    ],
    [
        "author" => "Brian Tracy",
        "quote" => "Goals are the fuel in the furnace of achievement."
    ],
    [
        "author" => "Leonardo da Vinci",
        "quote" => "Who sows virtue reaps honour."
    ],
    [
        "author" => "Dalai Lama",
        "quote" => "Be kind whenever possible. It is always possible."
    ],
    [
        "author" => "Chinese proverb",
        "quote" => "Talk doesn't cook rice."
    ],
    [
        "author" => "Buddha",
        "quote" => "He is able who thinks he is able."
    ],
    [
        "author" => "Larry Elder",
        "quote" => "A goal without a plan is just a wish."
    ],
    [
        "author" => "Michael Korda",
        "quote" => "To succeed, we must first believe that we can."
    ],
    [
        "author" => "Albert Einstein",
        "quote" => "Learn from yesterday, live for today, hope for tomorrow."
    ],
    [
        "author" => "James Lowell",
        "quote" => "A weed is no more than a flower in disguise."
    ],
    [
        "author" => "Yoda",
        "quote" => "Do, or do not. There is no try."
    ],
    [
        "author" => "Harriet Beecher Stowe",
        "quote" => "All serious daring starts from within."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "The best teacher is experience learned from failures."
    ],
    [
        "author" => "Murray Gell-Mann",
        "quote" => "Think how hard physics would be if particles could think."
    ],
    [
        "author" => "John Lennon",
        "quote" => "Love is the flower you've got to let grow."
    ],
    [
        "author" => "Napoleon Hill",
        "quote" => "Don't wait. The time will never be just right."
    ],
    [
        "author" => "Pericles",
        "quote" => "Time is the wisest counsellor of all."
    ],
    [
        "author" => "Napoleon Hill",
        "quote" => "You give before you get."
    ],
    [
        "author" => "Socrates",
        "quote" => "Wisdom begins in wonder."
    ],
    [
        "author" => "Baltasar Gracian",
        "quote" => "Without courage, wisdom bears no fruit."
    ],
    [
        "author" => "Aristotle",
        "quote" => "Change in all things is sweet."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "What you fear is that which requires action to overcome."
    ],
    [
        "author" => "Cullen Hightower",
        "quote" => "When performance exceeds ambition, the overlap is called success."
    ],
    [
        "author" => "African proverb",
        "quote" => "When deeds speak, words are nothing."
    ],
    [
        "author" => "Wayne Dyer",
        "quote" => "Real magic in relationships means an absence of judgement of others."
    ],
    [
        "author" => "Albert Einstein",
        "quote" => "I never think of the future. It comes soon enough."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "Skill to do comes of doing."
    ],
    [
        "author" => "Sophocles",
        "quote" => "Wisdom is the supreme part of happiness."
    ],
    [
        "author" => "Maya Angelou",
        "quote" => "I believe that every person is born with talent."
    ],
    [
        "author" => "Abraham Lincoln",
        "quote" => "Important principles may, and must, be inflexible."
    ],
    [
        "author" => "Richard Evans",
        "quote" => "The undertaking of a new action brings new strength."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "The years teach much which the days never know."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "Our distrust is very expensive."
    ],
    [
        "author" => "Bodhidharma",
        "quote" => "All know the way; few actually walk it."
    ],
    [
        "author" => "Johann Wolfgang von Goethe",
        "quote" => "Great talent finds happiness in execution."
    ],
    [
        "author" => "Michelangelo",
        "quote" => "Faith in oneself is the best and safest course."
    ],
    [
        "author" => "Winston Churchill",
        "quote" => "Courage is going from failure to failure without losing enthusiasm."
    ],
    [
        "author" => "Leo Tolstoy",
        "quote" => "The two most powerful warriors are patience and time."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "Anticipate the difficult by managing the easy."
    ],
    [
        "author" => "Buddha",
        "quote" => "Those who are free of resentful thoughts surely find peace."
    ],
    [
        "author" => "Sophocles",
        "quote" => "A short saying often contains much wisdom."
    ],
    [
        "author" => "Unknown",
        "quote" => "It takes both sunshine and rain to make a rainbow."
    ],
    [
        "author" => "Unknown",
        "quote" => "A beautiful thing is never perfect."
    ],
    [
        "author" => "Princess Diana",
        "quote" => "Only do what your heart tells you."
    ],
    [
        "author" => "John Pierrakos",
        "quote" => "Life is movement-we breathe, we eat, we walk, we move!"
    ],
    [
        "author" => "Eleanor Roosevelt",
        "quote" => "No one can make you feel inferior without your consent."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "Argue for your limitations, and sure enough theyre yours."
    ],
    [
        "author" => "Seneca",
        "quote" => "Luck is what happens when preparation meets opportunity."
    ],
    [
        "author" => "Napoleon Bonaparte",
        "quote" => "Victory belongs to the most persevering."
    ],
    [
        "author" => "William Shakespeare",
        "quote" => "Love all, trust a few, do wrong to none."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "In order to win, you must expect to win."
    ],
    [
        "author" => "Napoleon Hill",
        "quote" => "A goal is a dream with a deadline."
    ],
    [
        "author" => "Napoleon Hill",
        "quote" => "You can do it if you believe you can!"
    ],
    [
        "author" => "Bo Jackson",
        "quote" => "Set your goals high, and don't stop till you get there."
    ],
    [
        "author" => "Unknown",
        "quote" => "Every new day is another chance to change your life."
    ],
    [
        "author" => "Thich Nhat Hanh",
        "quote" => "Smile, breathe, and go slowly."
    ],
    [
        "author" => "Liberace",
        "quote" => "Nobody will believe in you unless you believe in yourself."
    ],
    [
        "author" => "William Arthur Ward",
        "quote" => "Do more than dream: work."
    ],
    [
        "author" => "Seneca",
        "quote" => "No man was ever wise by chance."
    ],
    [
        "author" => "Unknown",
        "quote" => "Some pursue happiness, others create it."
    ],
    [
        "author" => "William Shakespeare",
        "quote" => "He that is giddy thinks the world turns round."
    ],
    [
        "author" => "Ellen Gilchrist",
        "quote" => "Don't ruin the present with the ruined past."
    ],
    [
        "author" => "Albert Schweitzer",
        "quote" => "Do something wonderful, people may imitate it."
    ],
    [
        "author" => "Unknown",
        "quote" => "We do what we do because we believe."
    ],
    [
        "author" => "Eleanor Roosevelt",
        "quote" => "Do one thing every day that scares you."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "If you cannot be silent be brilliant and thoughtful."
    ],
    [
        "author" => "Carl Jung",
        "quote" => "Who looks outside, dreams; who looks inside, awakes."
    ],
    [
        "author" => "Buddha",
        "quote" => "What we think, we become."
    ],
    [
        "author" => "Lord Herbert",
        "quote" => "The shortest answer is doing."
    ],
    [
        "author" => "Leonardo da Vinci",
        "quote" => "All our knowledge has its origins in our perceptions."
    ],
    [
        "author" => "Unknown",
        "quote" => "The harder you fall, the higher you bounce."
    ],
    [
        "author" => "Anne Wilson Schaef",
        "quote" => "Trusting our intuition often saves us from disaster."
    ],
    [
        "author" => "Sojourner Truth",
        "quote" => "Truth is powerful and it prevails."
    ],
    [
        "author" => "Elizabeth Browning",
        "quote" => "Light tomorrow with today!"
    ],
    [
        "author" => "German proverb",
        "quote" => "Silence is a fence around wisdom."
    ],
    [
        "author" => "Madame de Stael",
        "quote" => "Society develops wit, but its contemplation alone forms genius."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "The simplest things are often the truest."
    ],
    [
        "author" => "Unknown",
        "quote" => "Everyone smiles in the same language."
    ],
    [
        "author" => "Bernadette Devlin",
        "quote" => "Yesterday I dared to struggle. Today I dare to win."
    ],
    [
        "author" => "Napoleon Hill",
        "quote" => "No alibi will save you from accepting the responsibility."
    ],
    [
        "author" => "Walt Disney",
        "quote" => "If you can dream it, you can do it."
    ],
    [
        "author" => "Buddha",
        "quote" => "It is better to travel well than to arrive."
    ],
    [
        "author" => "Anais Nin",
        "quote" => "Life shrinks or expands in proportion to one's courage."
    ],
    [
        "author" => "Sun Tzu",
        "quote" => "You have to believe in yourself."
    ],
    [
        "author" => "Wayne Dyer",
        "quote" => "Our intention creates our reality."
    ],
    [
        "author" => "Confucius",
        "quote" => "Silence is a true friend who never betrays."
    ],
    [
        "author" => "Johann Wolfgang von Goethe",
        "quote" => "Character develops itself in the stream of life."
    ],
    [
        "author" => "American proverb",
        "quote" => "From little acorns mighty oaks do grow."
    ],
    [
        "author" => "Jon Kabat-Zinn",
        "quote" => "You can't stop the waves, but you can learn to surf."
    ],
    [
        "author" => "Gustave Flaubert",
        "quote" => "Reality does not conform to the ideal, but confirms it."
    ],
    [
        "author" => "William Shakespeare",
        "quote" => "Speak low, if you speak love."
    ],
    [
        "author" => "Johann Wolfgang von Goethe",
        "quote" => "A really great talent finds its happiness in execution."
    ],
    [
        "author" => "John Lennon",
        "quote" => "Reality leaves a lot to the imagination."
    ],
    [
        "author" => "Seneca",
        "quote" => "The greatest remedy for anger is delay."
    ],
    [
        "author" => "Pearl Buck",
        "quote" => "Growth itself contains the germ of happiness."
    ],
    [
        "author" => "Unknown",
        "quote" => "You can do what's reasonable or you can decide what's possible."
    ],
    [
        "author" => "Leonardo da Vinci",
        "quote" => "Nothing strengthens authority so much as silence."
    ],
    [
        "author" => "Confucius",
        "quote" => "Wherever you go, go with all your heart."
    ],
    [
        "author" => "Albert Einstein",
        "quote" => "The only real valuable thing is intuition."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "Good luck is another name for tenacity of purpose."
    ],
    [
        "author" => "Sylvia Voirol",
        "quote" => "Rainbows apologize for angry skies."
    ],
    [
        "author" => "Unknown",
        "quote" => "Friendship isn't a big thing. It's a million little things."
    ],
    [
        "author" => "Theophrastus",
        "quote" => "Time is the most valuable thing a man can spend."
    ],
    [
        "author" => "Tony Robbins",
        "quote" => "Whatever happens, take responsibility."
    ],
    [
        "author" => "Oscar Wilde",
        "quote" => "Experience is simply the name we give our mistakes."
    ],
    [
        "author" => "Wayne Dyer",
        "quote" => "I think and that is all that I am."
    ],
    [
        "author" => "Unknown",
        "quote" => "A good plan today is better than a perfect plan tomorrow."
    ],
    [
        "author" => "Gloria Steinem",
        "quote" => "If the shoe doesn't fit, must we change the foot?"
    ],
    [
        "author" => "Marcus Aurelius",
        "quote" => "Each day provides its own gifts."
    ],
    [
        "author" => "Publilius Syrus",
        "quote" => "While we stop to think, we often miss our opportunity."
    ],
    [
        "author" => "Bernard Shaw",
        "quote" => "Life isn't about finding yourself. Life is about creating yourself."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "To bring anything into your life, imagine that it's already there."
    ],
    [
        "author" => "German proverb",
        "quote" => "Begin to weave and God will give you the thread."
    ],
    [
        "author" => "Confucius",
        "quote" => "The more you know yourself, the more you forgive yourself."
    ],
    [
        "author" => "Unknown",
        "quote" => "Someone remembers, someone cares; your name is whispered in someone's prayers."
    ],
    [
        "author" => "Mary Bethune",
        "quote" => "Without faith, nothing is possible. With it, nothing is impossible."
    ],
    [
        "author" => "Albert Einstein",
        "quote" => "Once we accept our limits, we go beyond them."
    ],
    [
        "author" => "Unknown",
        "quote" => "Don't be pushed by your problems; be led by your dreams."
    ],
    [
        "author" => "Brian Tracy",
        "quote" => "Whatever we expect with confidence becomes our own self-fulfilling prophecy."
    ],
    [
        "author" => "Pablo Picasso",
        "quote" => "Everything you can imagine is real."
    ],
    [
        "author" => "Usman Asif",
        "quote" => "Fear is a darkroom where negatives develop."
    ],
    [
        "author" => "Napoleon Bonaparte",
        "quote" => "The truest wisdom is a resolute determination."
    ],
    [
        "author" => "Victor Hugo",
        "quote" => "Life is the flower for which love is the honey."
    ],
    [
        "author" => "Epictetus",
        "quote" => "Freedom is the right to live as we wish."
    ],
    [
        "author" => "Unknown",
        "quote" => "Change your thoughts, change your life!"
    ],
    [
        "author" => "Robert Heller",
        "quote" => "Never ignore a gut feeling, but never believe that it's enough."
    ],
    [
        "author" => "Marcus Aurelius",
        "quote" => "Loss is nothing else but change,and change is Natures delight."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "Someone is special only if you tell them."
    ],
    [
        "author" => "Unknown",
        "quote" => "Today is the tomorrow you worried about yesterday."
    ],
    [
        "author" => "Thich Nhat Hanh",
        "quote" => "There is no way to happiness, happiness is the way."
    ],
    [
        "author" => "Unknown",
        "quote" => "The day always looks brighter from behind a smile."
    ],
    [
        "author" => "Unknown",
        "quote" => "A stumble may prevent a fall."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "He who talks more is sooner exhausted."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "He who is contented is rich."
    ],
    [
        "author" => "Plutarch",
        "quote" => "What we achieve inwardly will change outer reality."
    ],
    [
        "author" => "Ralph Waldo Emerson",
        "quote" => "Our strength grows out of our weaknesses."
    ],
    [
        "author" => "Mahatma Gandhi",
        "quote" => "We must become the change we want to see."
    ],
    [
        "author" => "Napoleon Hill",
        "quote" => "Happiness is found in doing, not merely possessing."
    ],
    [
        "author" => "Unknown",
        "quote" => "Put your future in good hands : your own."
    ],
    [
        "author" => "Wit",
        "quote" => "We choose our destiny in the way we treat others."
    ],
    [
        "author" => "Voltaire",
        "quote" => "No snowflake in an avalanche ever feels responsible."
    ],
    [
        "author" => "Virgil",
        "quote" => "Fortune favours the brave."
    ],
    [
        "author" => "Joseph Stalin",
        "quote" => "I believe in one thing only, the power of human will."
    ],
    [
        "author" => "Robert Frost",
        "quote" => "The best way out is always through."
    ],
    [
        "author" => "Seneca",
        "quote" => "The mind unlearns with difficulty what it has long learned."
    ],
    [
        "author" => "Abraham Lincoln",
        "quote" => "I destroy my enemies when I make them my friends."
    ],
    [
        "author" => "Thomas Fuller",
        "quote" => "No garden is without its weeds."
    ],
    [
        "author" => "Elbert Hubbard",
        "quote" => "There is no failure except in no longer trying."
    ],
    [
        "author" => "Turkish proverb",
        "quote" => "Kind words will unlock an iron door."
    ],
    [
        "author" => "Hugh Miller",
        "quote" => "Problems are only opportunities with thorns on them."
    ],
    [
        "author" => "A. Powell Davies",
        "quote" => "Life is just a chance to grow a soul."
    ],
    [
        "author" => "Johann Wolfgang von Goethe",
        "quote" => "Mountains cannot be surmounted except by winding paths."
    ],
    [
        "author" => "Thich Nhat Hanh",
        "quote" => "May our hearts garden of awakening bloom with hundreds of flowers."
    ],
    [
        "author" => "John Dryden",
        "quote" => "Fortune befriends the bold."
    ],
    [
        "author" => "Friedrich von Schiller",
        "quote" => "Keep true to the dreams of thy youth."
    ],
    [
        "author" => "Mike Ditka",
        "quote" => "You're never a loser until you quit trying."
    ],
    [
        "author" => "Immanuel Kant",
        "quote" => "Science is organized knowledge. Wisdom is organized life."
    ],
    [
        "author" => "Johann Wolfgang von Goethe",
        "quote" => "Knowing is not enough; we must apply!"
    ],
    [
        "author" => "Richard Bach",
        "quote" => "Strong beliefs win strong men, and then make them stronger."
    ],
    [
        "author" => "Albert Camus",
        "quote" => "Autumn is a second spring when every leaf is a flower."
    ],
    [
        "author" => "Toni Morrison",
        "quote" => "If you surrender to the wind, you can ride it."
    ],
    [
        "author" => "Helen Keller",
        "quote" => "Keep yourself to the sunshine and you cannot see the shadow."
    ],
    [
        "author" => "Paulo Coelho",
        "quote" => "Write your plans in pencil and give God the eraser."
    ],
    [
        "author" => "Pablo Picasso",
        "quote" => "Inspiration exists, but it has to find us working."
    ],
    [
        "author" => "Jonathan Kozol",
        "quote" => "Pick battles big enough to matter, small enough to win."
    ],
    [
        "author" => "Janis Joplin",
        "quote" => "Don't compromise yourself. You are all you've got."
    ],
    [
        "author" => "Sophocles",
        "quote" => "A short saying oft contains much wisdom."
    ],
    [
        "author" => "Epictetus",
        "quote" => "Difficulties are things that show a person what they are."
    ],
    [
        "author" => "Honore de Balzac",
        "quote" => "When you doubt your power, you give power to your doubt."
    ],
    [
        "author" => "Ovid",
        "quote" => "The cause is hidden. The effect is visible to all."
    ],
    [
        "author" => "Francis Bacon",
        "quote" => "A prudent question is one half of wisdom."
    ],
    [
        "author" => "Tony Robbins",
        "quote" => "The path to success is to take massive, determined action."
    ],
    [
        "author" => "Manuel Puig",
        "quote" => "I allow my intuition to lead my path."
    ],
    [
        "author" => "William R. Inge",
        "quote" => "Nature takes away any faculty that is not used."
    ],
    [
        "author" => "Epictetus",
        "quote" => "If you wish to be a writer, write."
    ],
    [
        "author" => "Wayne Dyer",
        "quote" => "There is no way to prosperity, prosperity is the way."
    ],
    [
        "author" => "Jim Rohn",
        "quote" => "Either you run the day or the day runs you."
    ],
    [
        "author" => "Publilius Syrus",
        "quote" => "Better be ignorant of a matter than half know it."
    ],
    [
        "author" => "Oprah Winfrey",
        "quote" => "Follow your instincts. That is where true wisdom manifests itself."
    ],
    [
        "author" => "Benjamin Franklin",
        "quote" => "There never was a good knife made of bad steel."
    ],
    [
        "author" => "Anatole France",
        "quote" => "To accomplish great things, we must dream as well as act."
    ],
    [
        "author" => "Saint Augustine",
        "quote" => "Patience is the companion of wisdom."
    ],
    [
        "author" => "Buddha",
        "quote" => "The mind is everything. What you think you become."
    ],
    [
        "author" => "Voltaire",
        "quote" => "To enjoy life, we must touch much of it lightly."
    ],
    [
        "author" => "Maya Lin",
        "quote" => "To fly, we have to have resistance."
    ],
    [
        "author" => "Unknown",
        "quote" => "What you see depends on what you're looking for."
    ],
    [
        "author" => "Blaise Pascal",
        "quote" => "The heart has its reasons which reason knows not of."
    ],
    [
        "author" => "William Shakespeare",
        "quote" => "Be great in act, as you have been in thought."
    ],
    [
        "author" => "Napoleon Bonaparte",
        "quote" => "Imagination rules the world."
    ],
    [
        "author" => "Blaise Pascal",
        "quote" => "Kind words do not cost much. Yet they accomplish much."
    ],
    [
        "author" => "Michelangelo",
        "quote" => "There is no greater harm than that of time wasted."
    ],
    [
        "author" => "Jonas Salk",
        "quote" => "Intuition will tell the thinking mind where to look next."
    ],
    [
        "author" => "Unknown",
        "quote" => "Worry gives a small thing a big shadow."
    ],
    [
        "author" => "Napoleon Hill",
        "quote" => "Fears are nothing more than a state of mind."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "The journey of a thousand miles begins with one step."
    ],
    [
        "author" => "Peter Drucker",
        "quote" => "Efficiency is doing things right; effectiveness is doing the right things."
    ],
    [
        "author" => "Luisa Sigea",
        "quote" => "Blaze with the fire that is never extinguished."
    ],
    [
        "author" => "Dr. Seuss",
        "quote" => "Don't cry because it's over. Smile because it happened."
    ],
    [
        "author" => "Jason Fried",
        "quote" => "No is easier to do. Yes is easier to say."
    ],
    [
        "author" => "Confucius",
        "quote" => "To be wrong is nothing unless you continue to remember it."
    ],
    [
        "author" => "Babe Ruth",
        "quote" => "Yesterdays home runs don't win today's games."
    ],
    [
        "author" => "Carlyle",
        "quote" => "Silence is deep as Eternity, Speech is shallow as Time."
    ],
    [
        "author" => "Leo F. Buscaglia",
        "quote" => "Don't smother each other. No one can grow in the shade."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "An ant on the move does more than a dozing ox"
    ],
    [
        "author" => "Indira Gandhi",
        "quote" => "You can't shake hands with a clenched fist."
    ],
    [
        "author" => "Plato",
        "quote" => "A good decision is based on knowledge and not on numbers."
    ],
    [
        "author" => "Confucius",
        "quote" => "The cautious seldom err."
    ],
    [
        "author" => "Frederick Douglass",
        "quote" => "If there is no struggle, there is no progress."
    ],
    [
        "author" => "Willa Cather",
        "quote" => "Where there is great love, there are always miracles."
    ],
    [
        "author" => "John Lennon",
        "quote" => "Time you enjoy wasting, was not wasted."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "Every problem has a gift for you in its hands."
    ],
    [
        "author" => "Jean de la Fontaine",
        "quote" => "Sadness flies away on the wings of time."
    ],
    [
        "author" => "Publilius Syrus",
        "quote" => "I have often regretted my speech, never my silence."
    ],
    [
        "author" => "Thomas Jefferson",
        "quote" => "Never put off till tomorrow what you can do today."
    ],
    [
        "author" => "Thomas Dewar",
        "quote" => "Minds are like parachutes. They only function when open."
    ],
    [
        "author" => "George Patton",
        "quote" => "If a man does his best, what else is there?"
    ],
    [
        "author" => "Benjamin Disraeli",
        "quote" => "The secret of success is constancy to purpose."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "Life is a progress, and not a station."
    ],
    [
        "author" => "Horace Friess",
        "quote" => "All seasons are beautiful for the person who carries happiness within."
    ],
    [
        "author" => "Elbert Hubbard",
        "quote" => "To avoid criticism, do nothing, say nothing, be nothing."
    ],
    [
        "author" => "Ovid",
        "quote" => "All things change; nothing perishes."
    ],
    [
        "author" => "Haynes Bayly",
        "quote" => "Absence makes the heart grow fonder."
    ],
    [
        "author" => "Lauren Bacall",
        "quote" => "Imagination is the highest kite one can fly."
    ],
    [
        "author" => "Frank Herbert",
        "quote" => "The beginning of knowledge is the discovery of something we do not understand."
    ],
    [
        "author" => "Elizabeth Browning",
        "quote" => "Love doesn't make the world go round, love is what makes the ride worthwhile."
    ],
    [
        "author" => "Arthur Conan Doyle",
        "quote" => "Whenever you have eliminated the impossible, whatever remains, however improbable, must be the truth."
    ],
    [
        "author" => "J. Willard Marriott",
        "quote" => "Good timber does not grow with ease; the stronger the wind, the stronger the trees."
    ],
    [
        "author" => "Dalai Lama",
        "quote" => "I believe that we are fundamentally the same and have the same basic potential."
    ],
    [
        "author" => "Edward Gibbon",
        "quote" => "The winds and waves are always on the side of the ablest navigators."
    ],
    [
        "author" => "Eleanor Roosevelt",
        "quote" => "The future belongs to those who believe in the beauty of their dreams."
    ],
    [
        "author" => "Unknown",
        "quote" => "To get something you never had, you have to do something you never did."
    ],
    [
        "author" => "Unknown",
        "quote" => "Be thankful when you don't know something for it gives you the opportunity to learn."
    ],
    [
        "author" => "Mahatma Gandhi",
        "quote" => "Strength does not come from physical capacity. It comes from an indomitable will."
    ],
    [
        "author" => "Og Mandino",
        "quote" => "Each misfortune you encounter will carry in it the seed of tomorrows good luck."
    ],
    [
        "author" => "Lewis B. Smedes",
        "quote" => "To forgive is to set a prisoner free and realize that prisoner was you."
    ],
    [
        "author" => "Buddha",
        "quote" => "In separateness lies the world's great misery, in compassion lies the world's true strength."
    ],
    [
        "author" => "Nikos Kazantzakis",
        "quote" => "By believing passionately in something that does not yet exist, we create it."
    ],
    [
        "author" => "Unknown",
        "quote" => "Letting go isn't the end of the world; it's the beginning of a new life."
    ],
    [
        "author" => "John Eliot",
        "quote" => "All the great performers I have worked with are fuelled by a personal dream."
    ],
    [
        "author" => "A. A. Milne",
        "quote" => "One of the advantages of being disorderly is that one is constantly making exciting discoveries."
    ],
    [
        "author" => "Marie Curie",
        "quote" => "I never see what has been done; I only see what remains to be done."
    ],
    [
        "author" => "Seneca",
        "quote" => "Begin at once to live and count each separate day as a separate life."
    ],
    [
        "author" => "Lawrence Peter",
        "quote" => "If you don't know where you are going, you will probably end up somewhere else."
    ],
    [
        "author" => "Hannah More",
        "quote" => "It is not so important to know everything as to appreciate what we learn."
    ],
    [
        "author" => "John Berry",
        "quote" => "The bird of paradise alights only upon the hand that does not grasp."
    ],
    [
        "author" => "William Yeats",
        "quote" => "Think as a wise man but communicate in the language of the people."
    ],
    [
        "author" => "Epictetus",
        "quote" => "Practice yourself, for heavens sake in little things, and then proceed to greater."
    ],
    [
        "author" => "Seneca",
        "quote" => "If one does not know to which port is sailing, no wind is favorable."
    ],
    [
        "author" => "Unknown",
        "quote" => "Our greatest glory is not in never failing but rising everytime we fall."
    ],
    [
        "author" => "Unknown",
        "quote" => "Being right is highly overrated. Even a stopped clock is right twice a day."
    ],
    [
        "author" => "Ken S. Keyes",
        "quote" => "To be upset over what you don't have is to waste what you do have."
    ],
    [
        "author" => "Thomas Edison",
        "quote" => "If we did the things we are capable of, we would astound ourselves."
    ],
    [
        "author" => "Marie Curie",
        "quote" => "Nothing in life is to be feared. It is only to be understood."
    ],
    [
        "author" => "Tony Robbins",
        "quote" => "Successful people ask better questions, and as a result, they get better answers."
    ],
    [
        "author" => "Unknown",
        "quote" => "Love is not blind; it simply enables one to see things others fail to see."
    ],
    [
        "author" => "Anne Schaef",
        "quote" => "Life is a process. We are a process. The universe is a process."
    ],
    [
        "author" => "Eleanor Roosevelt",
        "quote" => "I think somehow we learn who we really are and then live with that decision."
    ],
    [
        "author" => "Kenneth Patton",
        "quote" => "We learn what we have said from those who listen to our speaking."
    ],
    [
        "author" => "Kahlil Gibran",
        "quote" => "A little knowledge that acts is worth infinitely more than much knowledge that is idle."
    ],
    [
        "author" => "Unknown",
        "quote" => "If you get up one more time than you fall, you will make it through."
    ],
    [
        "author" => "Flora Whittemore",
        "quote" => "The doors we open and close each day decide the lives we live."
    ],
    [
        "author" => "H. W. Arnold",
        "quote" => "The worst bankrupt in the world is the person who has lost his enthusiasm."
    ],
    [
        "author" => "Buddha",
        "quote" => "Happiness comes when your work and words are of benefit to yourself and others."
    ],
    [
        "author" => "Unknown",
        "quote" => "Don't focus on making the right decision, focus on making the decision the right one."
    ],
    [
        "author" => "Wayne Dyer",
        "quote" => "Everything is perfect in the universe, even your desire to improve it."
    ],
    [
        "author" => "Eden Phillpotts",
        "quote" => "The universe is full of magical things, patiently waiting for our wits to grow sharper."
    ],
    [
        "author" => "Buddha",
        "quote" => "Just as a candle cannot burn without fire, men cannot live without a spiritual life."
    ],
    [
        "author" => "Mark Twain",
        "quote" => "A thing long expected takes the form of the unexpected when at last it comes."
    ],
    [
        "author" => "Benjamin Disraeli",
        "quote" => "Action may not always bring happiness; but there is no happiness without action."
    ],
    [
        "author" => "Oprah Winfrey",
        "quote" => "I don't believe in failure. It is not failure if you enjoyed the process."
    ],
    [
        "author" => "Confucius",
        "quote" => "What you do not want done to yourself, do not do to others."
    ],
    [
        "author" => "Winston Churchill",
        "quote" => "Short words are best and the old words when short are best of all."
    ],
    [
        "author" => "Buddha",
        "quote" => "If you light a lamp for somebody, it will also brighten your path."
    ],
    [
        "author" => "Lin-yutang",
        "quote" => "I have done my best: that is about all the philosophy of living one needs."
    ],
    [
        "author" => "Benjamin Disraeli",
        "quote" => "Through perseverance many people win success out of what seemed destined to be certain failure."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "Give thanks for the rain of life that propels us to reach new horizons."
    ],
    [
        "author" => "Unknown",
        "quote" => "Love is just a word until someone comes along and gives it meaning."
    ],
    [
        "author" => "Unknown",
        "quote" => "We all have problems. The way we solve them is what makes us different."
    ],
    [
        "author" => "Dave Weinbaum",
        "quote" => "The secret to a rich life is to have more beginnings than endings."
    ],
    [
        "author" => "Ralph Waldo Emerson",
        "quote" => "It is only when the mind and character slumber that the dress can be seen."
    ],
    [
        "author" => "Maya Angelou",
        "quote" => "If you don't like something, change it. If you can't change it, change your attitude."
    ],
    [
        "author" => "Confucius",
        "quote" => "Reviewing what you have learned and learning anew, you are fit to be a teacher."
    ],
    [
        "author" => "Augustinus Sanctus",
        "quote" => "The world is a book, and those who do not travel read only a page."
    ],
    [
        "author" => "Henri-Frederic Amiel",
        "quote" => "So long as a person is capable of self-renewal they are a living being."
    ],
    [
        "author" => "Louisa Alcott",
        "quote" => "I'm not afraid of storms, for Im learning how to sail my ship."
    ],
    [
        "author" => "Voltaire",
        "quote" => "Think for yourselves and let others enjoy the privilege to do so too."
    ],
    [
        "author" => "Annie Dillard",
        "quote" => "How we spend our days is, of course, how we spend our lives."
    ],
    [
        "author" => "Man Ray",
        "quote" => "It has never been my object to record my dreams, just to realize them."
    ],
    [
        "author" => "Sigmund Freud",
        "quote" => "The most complicated achievements of thought are possible without the assistance of consciousness."
    ],
    [
        "author" => "Wayne Dyer",
        "quote" => "Be miserable. Or motivate yourself. Whatever has to be done, it's always your choice."
    ],
    [
        "author" => "Napoleon Hill",
        "quote" => "Most great people have attained their greatest success just one step beyond their greatest failure."
    ],
    [
        "author" => "Henry Ford",
        "quote" => "If you think you can, you can. And if you think you can't, you're right."
    ],
    [
        "author" => "St. Augustine",
        "quote" => "Better to have loved and lost, than to have never loved at all."
    ],
    [
        "author" => "Leo Tolstoy",
        "quote" => "Everyone thinks of changing the world, but no one thinks of changing himself."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "The best way to pay for a lovely moment is to enjoy it."
    ],
    [
        "author" => "Winston Churchill",
        "quote" => "You have enemies? Good. That means you've stood up for something, sometime in your life."
    ],
    [
        "author" => "John De Paola",
        "quote" => "Slow down and everything you are chasing will come around and catch you."
    ],
    [
        "author" => "Buddha",
        "quote" => "Your worst enemy cannot harm you as much as your own unguarded thoughts."
    ],
    [
        "author" => "Lily Tomlin",
        "quote" => "I always wanted to be somebody, but I should have been more specific."
    ],
    [
        "author" => "John Lennon",
        "quote" => "Yeah we all shine on, like the moon, and the stars, and the sun."
    ],
    [
        "author" => "Martin Fischer",
        "quote" => "Knowledge is a process of piling up facts; wisdom lies in their simplification."
    ],
    [
        "author" => "Albert Einstein",
        "quote" => "Life is like riding a bicycle. To keep your balance you must keep moving."
    ],
    [
        "author" => "Albert Schweitzer",
        "quote" => "We should all be thankful for those people who rekindle the inner spirit."
    ],
    [
        "author" => "Thomas Edison",
        "quote" => "Opportunity is missed by most because it is dressed in overalls and looks like work."
    ],
    [
        "author" => "Albert Einstein",
        "quote" => "Feeling and longing are the motive forces behind all human endeavor and human creations."
    ],
    [
        "author" => "Johann Wolfgang von Goethe",
        "quote" => "In the end we retain from our studies only that which we practically apply."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "If you correct your mind, the rest of your life will fall into place."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "The world makes way for the man who knows where he is going."
    ],
    [
        "author" => "Napoleon Hill",
        "quote" => "When your desires are strong enough you will appear to possess superhuman powers to achieve."
    ],
    [
        "author" => "John Adams",
        "quote" => "Patience and perseverance have a magical effect before which difficulties disappear and obstacles vanish."
    ],
    [
        "author" => "Henry David Thoreau",
        "quote" => "I cannot make my days longer so I strive to make them better."
    ],
    [
        "author" => "Chinese proverb",
        "quote" => "Tension is who you think you should be. Relaxation is who you are."
    ],
    [
        "author" => "Helen Keller",
        "quote" => "Never bend your head. Always hold it high. Look the world right in the eye."
    ],
    [
        "author" => "Albert Schweitzer",
        "quote" => "One who gains strength by overcoming obstacles possesses the only strength which can overcome adversity."
    ],
    [
        "author" => "Calvin Coolidge",
        "quote" => "We cannot do everything at once, but we can do something at once."
    ],
    [
        "author" => "Abraham Lincoln",
        "quote" => "You have to do your own growing no matter how tall your grandfather was."
    ],
    [
        "author" => "Unknown",
        "quote" => "Invent your world. Surround yourself with people, color, sounds, and work that nourish you."
    ],
    [
        "author" => "General Douglas MacArthur",
        "quote" => "It is fatal to enter any war without the will to win it."
    ],
    [
        "author" => "Julius Charles Hare",
        "quote" => "Be what you are. This is the first step toward becoming better than you are."
    ],
    [
        "author" => "Buckminster Fuller",
        "quote" => "There is nothing in a caterpillar that tells you it's going to be a butterfly."
    ],
    [
        "author" => "Dalai Lama",
        "quote" => "Love and compassion open our own inner life, reducing stress, distrust and loneliness."
    ],
    [
        "author" => "Walter Lippmann",
        "quote" => "Ideals are an imaginative understanding of that which is desirable in that which is possible."
    ],
    [
        "author" => "Confucius",
        "quote" => "The superior man is satisfied and composed; the mean man is always full of distress."
    ],
    [
        "author" => "Bruce Lee",
        "quote" => "If you spend too much time thinking about a thing, you'll never get it done."
    ],
    [
        "author" => "Buddha",
        "quote" => "The way is not in the sky. The way is in the heart."
    ],
    [
        "author" => "Abraham Lincoln",
        "quote" => "Most people are about as happy as they make up their minds to be"
    ],
    [
        "author" => "Buddha",
        "quote" => "Three things cannot be long hidden: the sun, the moon, and the truth."
    ],
    [
        "author" => "Dalai Lama",
        "quote" => "More often than not, anger is actually an indication of weakness rather than of strength."
    ],
    [
        "author" => "Jim Beggs",
        "quote" => "Before you put on a frown, make absolutely sure there are no smiles available."
    ],
    [
        "author" => "Donald Kircher",
        "quote" => "A man of ability and the desire to accomplish something can do anything."
    ],
    [
        "author" => "Buddha",
        "quote" => "You, yourself, as much as anybody in the entire universe, deserve your love and affection."
    ],
    [
        "author" => "Eckhart Tolle",
        "quote" => "It is not uncommon for people to spend their whole life waiting to start living."
    ],
    [
        "author" => "H. Jackson Browne",
        "quote" => "Don't be afraid to go out on a limb. That's where the fruit is."
    ],
    [
        "author" => "Marquis Vauvenargues",
        "quote" => "Wicked people are always surprised to find ability in those that are good."
    ],
    [
        "author" => "Charlotte Bronte",
        "quote" => "Life is so constructed that an event does not, cannot, will not, match the expectation."
    ],
    [
        "author" => "Wayne Dyer",
        "quote" => "If you change the way you look at things, the things you look at change."
    ],
    [
        "author" => "Napoleon Hill",
        "quote" => "No man can succeed in a line of endeavor which he does not like."
    ],
    [
        "author" => "Buddha",
        "quote" => "You will not be punished for your anger, you will be punished by your anger."
    ],
    [
        "author" => "Robert Stevenson",
        "quote" => "Don't judge each day by the harvest you reap but by the seeds you plant."
    ],
    [
        "author" => "Andy Warhol",
        "quote" => "They say that time changes things, but you actually have to change them yourself."
    ],
    [
        "author" => "Benjamin Disraeli",
        "quote" => "Never apologize for showing feelings. When you do so, you apologize for the truth."
    ],
    [
        "author" => "Pema Chodron",
        "quote" => "The truth you believe and cling to makes you unavailable to hear anything new."
    ],
    [
        "author" => "Horace",
        "quote" => "Adversity has the effect of eliciting talents, which in prosperous circumstances would have lain dormant."
    ],
    [
        "author" => "Morris West",
        "quote" => "If you spend your whole life waiting for the storm, you'll never enjoy the sunshine."
    ],
    [
        "author" => "Franklin Roosevelt",
        "quote" => "The only limit to our realization of tomorrow will be our doubts of today."
    ],
    [
        "author" => "Edwin Chapin",
        "quote" => "Every action of our lives touches on some chord that will vibrate in eternity."
    ],
    [
        "author" => "Les Brown",
        "quote" => "Shoot for the moon. Even if you miss, you'll land among the stars."
    ],
    [
        "author" => "Confucius",
        "quote" => "It does not matter how slowly you go as long as you do not stop."
    ],
    [
        "author" => "Unknown",
        "quote" => "Every day may not be good, but there's something good in every day."
    ],
    [
        "author" => "Abraham Lincoln",
        "quote" => "Most folks are about as happy as they make up their minds to be."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "If you would take, you must first give, this is the beginning of intelligence."
    ],
    [
        "author" => "Unknown",
        "quote" => "Some people think it's holding that makes one strong, sometimes it's letting go."
    ],
    [
        "author" => "Havelock Ellis",
        "quote" => "It is on our failures that we base a new and different and better success."
    ],
    [
        "author" => "John Ruskin",
        "quote" => "Quality is never an accident; it is always the result of intelligent effort."
    ],
    [
        "author" => "Confucius",
        "quote" => "To study and not think is a waste. To think and not study is dangerous."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "Life is a succession of lessons, which must be lived to be understood."
    ],
    [
        "author" => "Thomas Hardy",
        "quote" => "Time changes everything except something within us which is always surprised by change."
    ],
    [
        "author" => "Wayne Dyer",
        "quote" => "You are important enough to ask and you are blessed enough to receive back."
    ],
    [
        "author" => "Napoleon Hill",
        "quote" => "If you cannot do great things, do small things in a great way."
    ],
    [
        "author" => "Oprah Winfrey",
        "quote" => "If you want your life to be more rewarding, you have to change the way you think."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "Transformation doesn't take place with a vacuum; instead, it occurs when we are indirectly and directly connected to all those around us."
    ],
    [
        "author" => "Leonardo Ruiz",
        "quote" => "The only difference between your abilities and others is the ability to put yourself in their shoes and actually try."
    ],
    [
        "author" => "Leon Blum",
        "quote" => "The free man is he who does not fear to go to the end of his thought."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "Great are they who see that spiritual is stronger than any material force, that thoughts rule the world."
    ],
    [
        "author" => "Bernard Shaw",
        "quote" => "A life spent making mistakes is not only more honourable but more useful than a life spent in doing nothing."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "The wise man does not lay up his own treasures. The more he gives to others, the more he has for his own."
    ],
    [
        "author" => "Charles Dickens",
        "quote" => "Don't leave a stone unturned. It's always something, to know you have done the most you could."
    ],
    [
        "author" => "Dalai Lama",
        "quote" => "By going beyond your own problems and taking care of others, you gain inner strength, self-confidence, courage, and a greater sense of calm."
    ],
    [
        "author" => "Sam Keen",
        "quote" => "We come to love not by finding a perfect person, but by learning to see an imperfect person perfectly."
    ],
    [
        "author" => "Walt Emerson",
        "quote" => "What lies behind us and what lies before us are tiny matters compared to what lies within us."
    ],
    [
        "author" => "John Astin",
        "quote" => "There are things so deep and complex that only intuition can reach it in our stage of development as human beings."
    ],
    [
        "author" => "Elbert Hubbard",
        "quote" => "A little more persistence, a little more effort, and what seemed hopeless failure may turn to glorious success."
    ],
    [
        "author" => "Henry Moore",
        "quote" => "There is no retirement for an artist, it's your way of living so there is no end to it."
    ],
    [
        "author" => "Confucius",
        "quote" => "I will not be concerned at other men is not knowing me;I will be concerned at my own want of ability."
    ],
    [
        "author" => "Unknown",
        "quote" => "Why worry about things you can't control when you can keep yourself busy controlling the things that depend on you?"
    ],
    [
        "author" => "Laozi",
        "quote" => "When you are content to be simply yourself and don't compare or compete, everybody will respect you."
    ],
    [
        "author" => "William Shakespeare",
        "quote" => "Be not afraid of greatness: some are born great, some achieve greatness, and some have greatness thrust upon them."
    ],
    [
        "author" => "George Sheehan",
        "quote" => "Success means having the courage, the determination, and the will to become the person you believe you were meant to be."
    ],
    [
        "author" => "Thomas Jefferson",
        "quote" => "Do you want to know who you are? Don't ask. Act! Action will delineate and define you."
    ],
    [
        "author" => "Antoine de Saint-Exupery",
        "quote" => "It is only with the heart that one can see rightly, what is essential is invisible to the eye."
    ],
    [
        "author" => "Marcel Proust",
        "quote" => "Let us be grateful to people who make us happy; they are the charming gardeners who make our souls blossom."
    ],
    [
        "author" => "Epictetus",
        "quote" => "Make the best use of what is in your power, and take the rest as it happens."
    ],
    [
        "author" => "Louise Hay",
        "quote" => "The thoughts we choose to think are the tools we use to paint the canvas of our lives."
    ],
    [
        "author" => "W. Clement Stone",
        "quote" => "No matter how carefully you plan your goals they will never be more that pipe dreams unless you pursue them with gusto."
    ],
    [
        "author" => "Robert McKain",
        "quote" => "The reason most goals are not achieved is that we spend our time doing second things first."
    ],
    [
        "author" => "John Quincy Adams",
        "quote" => "If your actions inspire others to dream more, learn more, do more and become more, you are a leader."
    ],
    [
        "author" => "Thomas Jefferson",
        "quote" => "I'm a great believer in luck and I find the harder I work, the more I have of it."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "Do not waste yourself in rejection, nor bark against the bad, but chant the beauty of the good."
    ],
    [
        "author" => "Johann Wolfgang von Goethe",
        "quote" => "The person born with a talent they are meant to use will find their greatest happiness in using it."
    ],
    [
        "author" => "William Saroyan",
        "quote" => "Good people are good because they've come to wisdom through failure. We get very little wisdom from success, you know."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "Your destiny isn't just fate; it is how you use your own developed abilities to get what you want."
    ],
    [
        "author" => "Leonardo da Vinci",
        "quote" => "Iron rusts from disuse; water loses its purity from stagnation... even so does inaction sap the vigour of the mind."
    ],
    [
        "author" => "Isaac Asimov",
        "quote" => "A subtle thought that is in error may yet give rise to fruitful inquiry that can establish truths of great value."
    ],
    [
        "author" => "Henry Van Dyke",
        "quote" => "Be glad of life because it gives you the chance to love, to work, to play, and to look up at the stars."
    ],
    [
        "author" => "Yogi Berra",
        "quote" => "You got to be careful if you don't know where you're going, because you might not get there."
    ],
    [
        "author" => "Naguib Mahfouz",
        "quote" => "You can tell whether a man is clever by his answers. You can tell whether a man is wise by his questions."
    ],
    [
        "author" => "Anthony Robbins",
        "quote" => "Life is a gift, and it offers us the privilege, opportunity, and responsibility to give something back by becoming more"
    ],
    [
        "author" => "John Wooden",
        "quote" => "You can't let praise or criticism get to you. It's a weakness to get caught up in either one."
    ],
    [
        "author" => "Og Mandino",
        "quote" => "I will love the light for it shows me the way, yet I will endure the darkness because it shows me the stars."
    ],
    [
        "author" => "Jane Addams",
        "quote" => "Our doubts are traitors and make us lose the good we often might win, by fearing to attempt."
    ],
    [
        "author" => "Thomas Carlyle",
        "quote" => "By nature man hates change; seldom will he quit his old home till it has actually fallen around his ears."
    ],
    [
        "author" => "M. Scott Peck",
        "quote" => "Until you value yourself, you won't value your time. Until you value your time, you won't do anything with it."
    ],
    [
        "author" => "Maureen Dowd",
        "quote" => "The minute you settle for less than you deserve, you get even less than you settled for."
    ],
    [
        "author" => "Charles Darwin",
        "quote" => "The highest stage in moral ure at which we can arrive is when we recognize that we ought to control our thoughts."
    ],
    [
        "author" => "Unknown",
        "quote" => "It is better to take many small steps in the right direction than to make a great leap forward only to stumble backward."
    ],
    [
        "author" => "Dalai Lama",
        "quote" => "If we have a positive mental attitude, then even when surrounded by hostility, we shall not lack inner peace."
    ],
    [
        "author" => "Christopher Morley",
        "quote" => "There is only one success, to be able to spend your life in your own way."
    ],
    [
        "author" => "Hannah Arendt",
        "quote" => "Promises are the uniquely human way of ordering the future, making it predictable and reliable to the extent that this is humanly possible."
    ],
    [
        "author" => "Alan Cohen",
        "quote" => "Appreciation is the highest form of prayer, for it acknowledges the presence of good wherever you shine the light of your thankful thoughts."
    ],
    [
        "author" => "Aldous Huxley",
        "quote" => "There is only one corner of the universe you can be certain of improving, and that's your own self."
    ],
    [
        "author" => "Marian Edelman",
        "quote" => "You're not obligated to win. You're obligated to keep trying to do the best you can every day."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "Everyone can taste success when the going is easy, but few know how to taste victory when times get tough."
    ],
    [
        "author" => "Sue Patton Thoele",
        "quote" => "Deep listening is miraculous for both listener and speaker.When someone receives us with open-hearted, non-judging, intensely interested listening, our spirits expand."
    ],
    [
        "author" => "Frank Crane",
        "quote" => "You may be deceived if you trust too much, but you will live in torment if you don't trust enough."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "Great indeed is the sublimity of the Creative, to which all beings owe their beginning and which permeates all heaven."
    ],
    [
        "author" => "Kathleen Norris",
        "quote" => "All that is necessary is to accept the impossible, do without the indispensable, and bear the intolerable."
    ],
    [
        "author" => "Confucius",
        "quote" => "Choose a job you love, and you will never have to work a day in your life."
    ],
    [
        "author" => "Eckhart Tolle",
        "quote" => "You cannot find yourself by going into the past. You can find yourself by coming into the present."
    ],
    [
        "author" => "Anne Bronte",
        "quote" => "All our talents increase in the using, and the every faculty, both good and bad, strengthen by exercise."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "In order to live free and happily you must sacrifice boredom. It is not always an easy sacrifice."
    ],
    [
        "author" => "Desiderius Erasmus",
        "quote" => "The fox has many tricks. The hedgehog has but one. But that is the best of all."
    ],
    [
        "author" => "Arthur Rubinstein",
        "quote" => "Of course there is no formula for success except perhaps an unconditional acceptance of life and what it brings."
    ],
    [
        "author" => "Louis Pasteur",
        "quote" => "Let me tell you the secret that has led me to my goal: my strength lies solely in my tenacity"
    ],
    [
        "author" => "Rumi",
        "quote" => "Something opens our wings. Something makes boredom and hurt disappear. Someone fills the cup in front of us: We taste only sacredness."
    ],
    [
        "author" => "Sogyal Rinpoche",
        "quote" => "We must never forget that it is through our actions, words, and thoughts that we have a choice."
    ],
    [
        "author" => "Dennis Kimbro",
        "quote" => "We see things not as they are, but as we are. Our perception is shaped by our previous experiences."
    ],
    [
        "author" => "William Penn",
        "quote" => "True silence is the rest of the mind; it is to the spirit what sleep is to the body, nourishment and refreshment."
    ],
    [
        "author" => "Immanuel Kant",
        "quote" => "All our knowledge begins with the senses, proceeds then to the understanding, and ends with reason. There is nothing higher than reason."
    ],
    [
        "author" => "Buddha",
        "quote" => "The thought manifests as the word. The word manifests as the deed. The deed develops into habit. And the habit hardens into character."
    ],
    [
        "author" => "Unknown",
        "quote" => "As the rest of the world is walking out the door, your best friends are the ones walking in."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "Patience is a virtue but you will never ever accomplish anything if you don't exercise action over patience."
    ],
    [
        "author" => "Robert Lynd",
        "quote" => "Any of us can achieve virtue, if by virtue we merely mean the avoidance of the vices that do not attract us."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "If the single man plant himself indomitably on his instincts, and there abide, the huge world will come round to him."
    ],
    [
        "author" => "Donald Trump",
        "quote" => "Money was never a big motivation for me, except as a way to keep score. The real excitement is playing the game."
    ],
    [
        "author" => "Eleanor Roosevelt",
        "quote" => "Friendship with oneself is all important because without it one cannot be friends with anybody else in the world."
    ],
    [
        "author" => "Robert Fulghum",
        "quote" => "Peace is not something you wish for. It's something you make, something you do, something you are, and something you give away."
    ],
    [
        "author" => "Bruce Lee",
        "quote" => "A wise man can learn more from a foolish question than a fool can learn from a wise answer."
    ],
    [
        "author" => "Arthur Schopenhauer",
        "quote" => "Every man takes the limits of his own field of vision for the limits of the world."
    ],
    [
        "author" => "Andre Gide",
        "quote" => "One does not discover new lands without consenting to lose sight of the shore for a very long time."
    ],
    [
        "author" => "Sai Baba",
        "quote" => "What is new in the world? Nothing. What is old in the world? Nothing. Everything has always been and will always be."
    ],
    [
        "author" => "Dalai Lama",
        "quote" => "Genuine love should first be directed at oneself. if we do not love ourselves, how can we love others?"
    ],
    [
        "author" => "Tom Lehrer",
        "quote" => "Life is like a sewer. What you get out of it depends on what you put into it."
    ],
    [
        "author" => "Bruce Lee",
        "quote" => "Notice that the stiffest tree is most easily cracked, while the bamboo or willow survives by bending with the wind."
    ],
    [
        "author" => "Alfred Sheinwold",
        "quote" => "Learn all you can from the mistakes of others. You won't have time to make them all yourself."
    ],
    [
        "author" => "Sri Chinmoy",
        "quote" => "Judge nothing, you will be happy. Forgive everything, you will be happier. Love everything, you will be happiest."
    ],
    [
        "author" => "Johann Wolfgang von Goethe",
        "quote" => "People are so constituted that everybody would rather undertake what they see others do, whether they have an aptitude for it or not."
    ],
    [
        "author" => "James Freeman Clarke",
        "quote" => "We are either progressing or retrograding all the while. There is no such thing as remaining stationary in this life."
    ],
    [
        "author" => "Anais Nin",
        "quote" => "The possession of knowledge does not kill the sense of wonder and mystery. There is always more mystery."
    ],
    [
        "author" => "Marcus Aurelius",
        "quote" => "Everything that happens happens as it should, and if you observe carefully, you will find this to be so."
    ],
    [
        "author" => "Wayne Dyer",
        "quote" => "What we think determines what happens to us, so if we want to change our lives, we need to stretch our minds."
    ],
    [
        "author" => "Buddha",
        "quote" => "In a controversy the instant we feel anger we have already ceased striving for the truth, and have begun striving for ourselves."
    ],
    [
        "author" => "Sydney Smith",
        "quote" => "It is the greatest of all mistakes to do nothing because you can only do little, do what you can."
    ],
    [
        "author" => "Confucius",
        "quote" => "When you see a man of worth, think of how you may emulate him. When you see one who is unworthy, examine yourself."
    ],
    [
        "author" => "Mary Kay Ash",
        "quote" => "Aerodynamically the bumblebee shouldn't be able to fly, but the bumblebee doesn't know that so it goes on flying anyway."
    ],
    [
        "author" => "Lloyd Jones",
        "quote" => "Those who try to do something and fail are infinitely better than those who try nothing and succeed."
    ],
    [
        "author" => "Vista Kelly",
        "quote" => "Snowflakes are one of natures most fragile things, but just look what they can do when they stick together."
    ],
    [
        "author" => "Ben Stein",
        "quote" => "The first step to getting the things you want out of life is this: decide what you want."
    ],
    [
        "author" => "Unknown",
        "quote" => "Why compare yourself with others? No one in the entire world can do a better job of being you than you."
    ],
    [
        "author" => "Aldous Huxley",
        "quote" => "Experience is not what happens to a man. It is what a man does with what happens to him."
    ],
    [
        "author" => "Unknown",
        "quote" => "A good teacher is like a candle, it consumes itself to light the way for others."
    ],
    [
        "author" => "Oscar Wilde",
        "quote" => "The only thing to do with good advice is to pass it on. It is never of any use to oneself."
    ],
    [
        "author" => "Unknown",
        "quote" => "Life is not measured by the breaths we take, but by the moments that take our breath."
    ],
    [
        "author" => "Honore de Balzac",
        "quote" => "The smallest flower is a thought, a life answering to some feature of the Great Whole, of whom they have a persistent intuition."
    ],
    [
        "author" => "Jacob Braude",
        "quote" => "Consider how hard it is to change yourself and you'll understand what little chance you have in trying to change others."
    ],
    [
        "author" => "Vince Lombardi",
        "quote" => "If you'll not settle for anything less than your best, you will be amazed at what you can accomplish in your lives."
    ],
    [
        "author" => "Oliver Holmes",
        "quote" => "What lies behind us and what lies before us are small matters compared to what lies within us."
    ],
    [
        "author" => "Dalai Lama",
        "quote" => "With the realization of ones own potential and self-confidence in ones ability, one can build a better world."
    ],
    [
        "author" => "Nelson Mandela",
        "quote" => "There is nothing like returning to a place that remains unchanged to find the ways in which you yourself have altered."
    ],
    [
        "author" => "Robert Anthony",
        "quote" => "Forget about all the reasons why something may not work. You only need to find one good reason why it will."
    ],
    [
        "author" => "Aristotle",
        "quote" => "It is the mark of an educated mind to be able to entertain a thought without accepting it."
    ],
    [
        "author" => "Washington Irving",
        "quote" => "Love is never lost. If not reciprocated, it will flow back and soften and purify the heart."
    ],
    [
        "author" => "Anne Frank",
        "quote" => "We all live with the objective of being happy; our lives are all different and yet the same."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "Many people think of prosperity that concerns money only to forget that true prosperity is of the mind."
    ],
    [
        "author" => "Thich Nhat Hanh",
        "quote" => "To be beautiful means to be yourself. You don't need to be accepted by others. You need to accept yourself."
    ],
    [
        "author" => "Buddha",
        "quote" => "Do not overrate what you have received, nor envy others. He who envies others does not obtain peace of mind."
    ],
    [
        "author" => "Jessamyn West",
        "quote" => "It is very easy to forgive others their mistakes; it takes more grit to forgive them for having witnessed your own."
    ],
    [
        "author" => "Plato",
        "quote" => "Bodily exercise, when compulsory, does no harm to the body; but knowledge which is acquired under compulsion obtains no hold on the mind."
    ],
    [
        "author" => "Bruce Lee",
        "quote" => "Always be yourself, express yourself, have faith in yourself, do not go out and look for a successful personality and duplicate it."
    ],
    [
        "author" => "Charlotte Gilman",
        "quote" => "Let us revere, let us worship, but erect and open-eyed, the highest, not the lowest; the future, not the past!"
    ],
    [
        "author" => "Mother Teresa",
        "quote" => "Every time you smile at someone, it is an action of love, a gift to that person, a beautiful thing."
    ],
    [
        "author" => "Margaret Runbeck",
        "quote" => "Silences make the real conversations between friends. Not the saying but the never needing to say is what counts."
    ],
    [
        "author" => "Dalai Lama",
        "quote" => "The key to transforming our hearts and minds is to have an understanding of how our thoughts and emotions work."
    ],
    [
        "author" => "Johann Wolfgang von Goethe",
        "quote" => "If you must tell me your opinions, tell me what you believe in. I have plenty of douts of my own."
    ],
    [
        "author" => "Ovid",
        "quote" => "Chance is always powerful. Let your hook be always cast; in the pool where you least expect it, there will be a fish."
    ],
    [
        "author" => "Og Mandino",
        "quote" => "I seek constantly to improve my manners and graces, for they are the sugar to which all are attracted."
    ],
    [
        "author" => "James Barrie",
        "quote" => "We never understand how little we need in this world until we know the loss of it."
    ],
    [
        "author" => "Unknown",
        "quote" => "The real measure of your wealth is how much youd be worth if you lost all your money."
    ],
    [
        "author" => "Buddha",
        "quote" => "To keep the body in good health is a duty... otherwise we shall not be able to keep our mind strong and clear."
    ],
    [
        "author" => "Bruce Lee",
        "quote" => "Take no thought of who is right or wrong or who is better than. Be not for or against."
    ],
    [
        "author" => "Everett Dirksen",
        "quote" => "I am a man of fixed and unbending principles, the first of which is to be flexible at all times."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "Today, give a stranger a smile without waiting for it may be the joy they need to have a great day."
    ],
    [
        "author" => "Henry Miller",
        "quote" => "The moment one gives close attention to anything, even a blade of grass, it becomes a mysterious, awesome, indescribably magnificent world in itself."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "At the center of your being you have the answer; you know who you are and you know what you want."
    ],
    [
        "author" => "Niels Bohr",
        "quote" => "How wonderful that we have met with a paradox. Now we have some hope of making progress."
    ],
    [
        "author" => "Georg Lichtenberg",
        "quote" => "Everyone is a genius at least once a year. A real genius has his original ideas closer together."
    ],
    [
        "author" => "Anais Nin",
        "quote" => "Dreams pass into the reality of action. From the actions stems the dream again; and this interdependence produces the highest form of living."
    ],
    [
        "author" => "Gloria Steinem",
        "quote" => "Without leaps of imagination, or dreaming, we lose the excitement of possibilities. Dreaming, after all, is a form of planning."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "Sadness may be part of life but there is no need to let it dominate your entire life."
    ],
    [
        "author" => "Charles Schwab",
        "quote" => "Keeping a little ahead of conditions is one of the secrets of business, the trailer seldom goes far."
    ],
    [
        "author" => "Epictetus",
        "quote" => "Nature gave us one tongue and two ears so we could hear twice as much as we speak."
    ],
    [
        "author" => "Barbara Baron",
        "quote" => "Don't wait for your feelings to change to take the action. Take the action and your feelings will change."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "You are always free to change your mind and choose a different future, or a different past."
    ],
    [
        "author" => "Lou Holtz",
        "quote" => "You were not born a winner, and you were not born a loser. You are what you make yourself be."
    ],
    [
        "author" => "Napoleon Hill",
        "quote" => "Cherish your visions and your dreams as they are the children of your soul, the blueprints of your ultimate achievements."
    ],
    [
        "author" => "Napoleon Hill",
        "quote" => "Cherish your visions and your dreams as they are the children of your soul; the blueprints of your ultimate achievements."
    ],
    [
        "author" => "Robert Stevenson",
        "quote" => "To be what we are, and to become what we are capable of becoming, is the only end of life."
    ],
    [
        "author" => "Charles DeLint",
        "quote" => "The road leading to a goal does not separate you from the destination; it is essentially a part of it."
    ],
    [
        "author" => "Bruce Lee",
        "quote" => "Take things as they are. Punch when you have to punch. Kick when you have to kick."
    ],
    [
        "author" => "Albert Einstein",
        "quote" => "I believe that a simple and unassuming manner of life is best for everyone, best both for the body and the mind."
    ],
    [
        "author" => "Unknown",
        "quote" => "Though no one can go back and make a brand new start, anyone can start from now and make a brand new ending."
    ],
    [
        "author" => "Paavo Nurmi",
        "quote" => "Mind is everything: muscle, pieces of rubber. All that I am, I am because of my mind."
    ],
    [
        "author" => "Anne Frank",
        "quote" => "How wonderful it is that nobody need wait a single moment before starting to improve the world."
    ],
    [
        "author" => "Unknown",
        "quote" => "A friend is someone who understands your past, believes in your future, and accepts you just the way you are."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "It is one of the blessings of old friends that you can afford to be stupid with them."
    ],
    [
        "author" => "Tryon Edwards",
        "quote" => "He that never changes his opinions, never corrects his mistakes, and will never be wiser on the morrow than he is today."
    ],
    [
        "author" => "Abraham Lincoln",
        "quote" => "Give me six hours to chop down a tree and I will spend the first four sharpening the axe."
    ],
    [
        "author" => "E. M. Forster",
        "quote" => "One must be fond of people and trust them if one is not to make a mess of life."
    ],
    [
        "author" => "David Seamans",
        "quote" => "We cannot change our memories, but we can change their meaning and the power they have over us."
    ],
    [
        "author" => "Confucius",
        "quote" => "Being in humaneness is good. If we select other goodness and thus are far apart from humaneness, how can we be the wise?"
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "To give hope to someone occurs when you teach them how to use the tools to do it for themselves."
    ],
    [
        "author" => "Lucille Ball",
        "quote" => "Id rather regret the things that I have done than the things that I have not done."
    ],
    [
        "author" => "Eckhart Tolle",
        "quote" => "The past has no power to stop you from being present now. Only your grievance about the past can do that."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "If the stars should appear but one night every thousand years how man would marvel and adore."
    ],
    [
        "author" => "Laurence J. Peter",
        "quote" => "There are two kinds of failures: those who thought and never did, and those who did and never thought."
    ],
    [
        "author" => "Elizabeth Arden",
        "quote" => "I'm not interested in age. People who tell me their age are silly. You're as old as you feel."
    ],
    [
        "author" => "Dalai Lama",
        "quote" => "I find hope in the darkest of days, and focus in the brightest. I do not judge the universe."
    ],
    [
        "author" => "Confucius",
        "quote" => "When it is obvious that the goals cannot be reached, don't adjust the goals, adjust the action steps."
    ],
    [
        "author" => "Nikola Tesla",
        "quote" => "Our virtues and our failings are inseparable, like force and matter. When they separate, man is no more."
    ],
    [
        "author" => "Leo Aikman",
        "quote" => "Blessed is the person who is too busy to worry in the daytime, and too sleepy to worry at night."
    ],
    [
        "author" => "Pablo Picasso",
        "quote" => "He can who thinks he can, and he can't who thinks he can't. This is an inexorable, indisputable law."
    ],
    [
        "author" => "Vernon Cooper",
        "quote" => "These days people seek knowledge, not wisdom. Knowledge is of the past, wisdom is of the future."
    ],
    [
        "author" => "Benjamin Disraeli",
        "quote" => "One secret of success in life is for a man to be ready for his opportunity when it comes."
    ],
    [
        "author" => "Dalai Lama",
        "quote" => "People take different roads seeking fulfilment and happiness. Just because theyre not on your road doesn't mean they've gotten lost."
    ],
    [
        "author" => "Carl Jung",
        "quote" => "The shoe that fits one person pinches another; there is no recipe for living that suits all cases."
    ],
    [
        "author" => "Buddha",
        "quote" => "There are only two mistakes one can make along the road to truth; not going all the way, and not starting."
    ],
    [
        "author" => "Marcus Aurelius",
        "quote" => "Very little is needed to make a happy life; it is all within yourself, in your way of thinking."
    ],
    [
        "author" => "Unknown",
        "quote" => "Giving up doesn't always mean you are weak. Sometimes it means that you are strong enough to let go."
    ],
    [
        "author" => "Johann Wolfgang von Goethe",
        "quote" => "Treat people as if they were what they ought to be and you help them to become what they are capable of being."
    ],
    [
        "author" => "Thich Nhat Hanh",
        "quote" => "The most precious gift we can offer anyone is our attention. When mindfulness embraces those we love, they will bloom like flowers."
    ],
    [
        "author" => "Jack Dixon",
        "quote" => "If you focus on results, you will never change. If you focus on change, you will get results."
    ],
    [
        "author" => "G. K. Chesterton",
        "quote" => "I would maintain that thanks are the highest form of thought, and that gratitude is happiness doubled by wonder."
    ],
    [
        "author" => "Denis Waitley",
        "quote" => "There are two primary choices in life: to accept conditions as they exist, or accept the responsibility for changing them."
    ],
    [
        "author" => "Lao-Tzu",
        "quote" => "All difficult things have their origin in that which is easy, and great things in that which is small."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "You can be what you want to be. You have the power within and we will help you always."
    ],
    [
        "author" => "Johannes Gaertner",
        "quote" => "To speak gratitude is courteous and pleasant, to enact gratitude is generous and noble, but to live gratitude is to touch Heaven."
    ],
    [
        "author" => "Doug Larson",
        "quote" => "Wisdom is the reward you get for a lifetime of listening when you'd have preferred to talk."
    ],
    [
        "author" => "Charles Lamb",
        "quote" => "The greatest pleasure I know is to do a good action by stealth, and to have it found out by accident."
    ],
    [
        "author" => "John Muir",
        "quote" => "When one tugs at a single thing in nature, he finds it attached to the rest of the world."
    ],
    [
        "author" => "Winston Churchill",
        "quote" => "Courage is what it takes to stand up and speak; courage is also what it takes to sit down and listen."
    ],
    [
        "author" => "Helen Keller",
        "quote" => "The most beautiful things in the world cannot be seen or even touched. They must be felt with the heart."
    ],
    [
        "author" => "Buddha",
        "quote" => "To live a pure unselfish life, one must count nothing as ones own in the midst of abundance."
    ],
    [
        "author" => "Thomas Edison",
        "quote" => "Many of life's failures are people who did not realize how close they were to success when they gave up."
    ],
    [
        "author" => "William Ward",
        "quote" => "When we seek to discover the best in others, we somehow bring out the best in ourselves."
    ],
    [
        "author" => "Michael Jordan",
        "quote" => "If you accept the expectations of others, especially negative ones, then you never will change the outcome."
    ],
    [
        "author" => "Oliver Holmes",
        "quote" => "A man may fulfil the object of his existence by asking a question he cannot answer, and attempting a task he cannot achieve."
    ],
    [
        "author" => "Confucius",
        "quote" => "I am not bothered by the fact that I am unknown. I am bothered when I do not know others."
    ],
    [
        "author" => "Epictetus",
        "quote" => "He is a wise man who does not grieve for the things which he has not, but rejoices for those which he has."
    ],
    [
        "author" => "Pablo Picasso",
        "quote" => "I am always doing that which I cannot do, in order that I may learn how to do it."
    ],
    [
        "author" => "Barack Obama",
        "quote" => "If you're walking down the right path and you're willing to keep walking, eventually you'll make progress."
    ],
    [
        "author" => "Ivy Baker Priest",
        "quote" => "The world is round and the place which may seem like the end may also be the beginning."
    ],
    [
        "author" => "Unknown",
        "quote" => "Never miss an opportunity to make others happy, even if you have to leave them alone in order to do it."
    ],
    [
        "author" => "Danielle Ingrum",
        "quote" => "Give it all you've got because you never know if there's going to be a next time."
    ],
    [
        "author" => "Old German proverb",
        "quote" => "You have to take it as it happens, but you should try to make it happen the way you want to take it."
    ],
    [
        "author" => "Ralph Blum",
        "quote" => "Nothing is predestined: The obstacles of your past can become the gateways that lead to new beginnings."
    ],
    [
        "author" => "Bruce Lee",
        "quote" => "Im not in this world to live up to your expectations and you're not in this world to live up to mine."
    ],
    [
        "author" => "Thich Nhat Hanh",
        "quote" => "Sometimes your joy is the source of your smile, but sometimes your smile can be the source of your joy."
    ],
    [
        "author" => "Walter Cronkite",
        "quote" => "I can't imagine a person becoming a success who doesn't give this game of life everything hes got."
    ],
    [
        "author" => "Socrates",
        "quote" => "The greatest way to live with honor in this world is to be what we pretend to be."
    ],
    [
        "author" => "Seneca",
        "quote" => "The conditions of conquest are always easy. We have but to toil awhile, endure awhile, believe always, and never turn back."
    ],
    [
        "author" => "Chalmers",
        "quote" => "The grand essentials of happiness are: something to do, something to love, and something to hope for."
    ],
    [
        "author" => "Thich Nhat Hanh",
        "quote" => "By living deeply in the present moment we can understand the past better and we can prepare for a better future."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "Do not be too timid and squeamish about your reactions. All life is an experiment. The more experiments you make the better."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "Do not go where the path may lead, go instead where there is no path and leave a trail."
    ],
    [
        "author" => "Robert Louis Stevenson",
        "quote" => "There is no duty we so underrate as the duty of being happy. By being happy we sow anonymous benefits upon the world."
    ],
    [
        "author" => "Napoleon Hill",
        "quote" => "Edison failed 10,000 times before he made the electric light. Do not be discouraged if you fail a few times."
    ],
    [
        "author" => "Unknown",
        "quote" => "Yesterday is history. Tomorrow is a mystery. And today? Today is a gift that's why they call it the present."
    ],
    [
        "author" => "Henry Thoreau",
        "quote" => "The only way to tell the truth is to speak with kindness. Only the words of a loving man can be heard."
    ],
    [
        "author" => "Benjamin Disraeli",
        "quote" => "The greatest good you can do for another is not just to share your riches but to reveal to him his own."
    ],
    [
        "author" => "Brian Tracy",
        "quote" => "You can only grow if you're willing to feel awkward and uncomfortable when you try something new."
    ],
    [
        "author" => "Joan Didion",
        "quote" => "To free us from the expectations of others, to give us back to ourselves, there lies the great, singular power of self-respect."
    ],
    [
        "author" => "Mabel Newcomber",
        "quote" => "It is more important to know where you are going than to get there quickly. Do not mistake activity for achievement."
    ],
    [
        "author" => "Unknown",
        "quote" => "When you don't know what you believe, everything becomes an argument. Everything is debatable. But when you stand for something, decisions are obvious."
    ],
    [
        "author" => "Robert Graves",
        "quote" => "Intuition is the supra-logic that cuts out all the routine processes of thought and leaps straight from the problem to the answer."
    ],
    [
        "author" => "Frank Wright",
        "quote" => "The thing always happens that you really believe in; and the belief in a thing makes it happen."
    ],
    [
        "author" => "Francois de La Rochefoucauld",
        "quote" => "A true friend is the most precious of all possessions and the one we take the least thought about acquiring."
    ],
    [
        "author" => "Epictetus",
        "quote" => "There is only one way to happiness and that is to cease worrying about things which are beyond the power of our will."
    ],
    [
        "author" => "Margaret Cousins",
        "quote" => "Appreciation can make a day, even change a life. Your willingness to put it into words is all that is necessary."
    ],
    [
        "author" => "Unknown",
        "quote" => "Every sixty seconds you spend angry, upset or mad, is a full minute of happiness you'll never get back."
    ],
    [
        "author" => "Thomas Carlyle",
        "quote" => "This world, after all our science and sciences, is still a miracle; wonderful, inscrutable, magical and more, to whosoever will think of it."
    ],
    [
        "author" => "Pearl Buck",
        "quote" => "Every great mistake has a halfway moment, a split second when it can be recalled and perhaps remedied."
    ],
    [
        "author" => "Catherine Pulsifer",
        "quote" => "You can adopt the attitude there is nothing you can do, or you can see the challenge as your call to action."
    ],
    [
        "author" => "Alfred Tennyson",
        "quote" => "The happiness of a man in this life does not consist in the absence but in the mastery of his passions."
    ],
    [
        "author" => "Margaret Mead",
        "quote" => "Never doubt that a small group of thoughtful, committed people can change the world. Indeed. It is the only thing that ever has."
    ],
    [
        "author" => "Ovid",
        "quote" => "Let your hook always be cast; in the pool where you least expect it, there will be a fish."
    ],
    [
        "author" => "Remez Sasson",
        "quote" => "You get peace of mind not by thinking about it or imagining it, but by quietening and relaxing the restless mind."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "Your friends will know you better in the first minute you meet than your acquaintances will know you in a thousand years."
    ],
    [
        "author" => "Pema Chodron",
        "quote" => "When you begin to touch your heart or let your heart be touched, you begin to discover that it's bottomless."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "If you love someone, set them free. If they come back they're yours; if they don't they never were."
    ],
    [
        "author" => "David Jordan",
        "quote" => "Wisdom is knowing what to do next; Skill is knowing how ot do it, and Virtue is doing it."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "Bad things are not the worst things that can happen to us. Nothing is the worst thing that can happen to us!"
    ],
    [
        "author" => "Alan Watts",
        "quote" => "No valid plans for the future can be made by those who have no capacity for living now."
    ],
    [
        "author" => "Oscar Wilde",
        "quote" => "The aim of life is self-development. To realize ones nature perfectly, that is what each of us is here for."
    ],
    [
        "author" => "Anatole France",
        "quote" => "To accomplish great things, we must not only act, but also dream; not only plan, but also believe."
    ],
    [
        "author" => "Thomas Edison",
        "quote" => "The first requisite for success is the ability to apply your physical and mental energies to one problem incessantly without growing weary."
    ],
    [
        "author" => "John Steinbeck",
        "quote" => "If we could learn to like ourselves, even a little, maybe our cruelties and angers might melt away."
    ],
    [
        "author" => "Unknown",
        "quote" => "If we are facing in the right direction, all we have to do is keep on walking."
    ],
    [
        "author" => "Eleanor Roosevelt",
        "quote" => "Remember always that you not only have the right to be an individual, you have an obligation to be one."
    ],
    [
        "author" => "Denis Waitley",
        "quote" => "There are two primary choices in life: to accept conditions as they exist, or accept responsibility for changing them."
    ],
    [
        "author" => "Epictetus",
        "quote" => "If you seek truth you will not seek victory by dishonourable means, and if you find truth you will become invincible."
    ],
    [
        "author" => "Eknath Easwaran",
        "quote" => "Through meditation and by giving full attention to one thing at a time, we can learn to direct attention where we choose."
    ],
    [
        "author" => "Helen Keller",
        "quote" => "We could never learn to be brave and patient if there were only joy in the world."
    ],
    [
        "author" => "Marcus Aurelius",
        "quote" => "If it is not right do not do it; if it is not true do not say it."
    ],
    [
        "author" => "Norman Schwarzkopf",
        "quote" => "The truth of the matter is that you always know the right thing to do. The hard part is doing it."
    ],
    [
        "author" => "Julie Morgenstern",
        "quote" => "Some people thrive on huge, dramatic change. Some people prefer the slow and steady route. Do what's right for you."
    ],
    [
        "author" => "Blaise Pascal",
        "quote" => "Man is equally incapable of seeing the nothingness from which he emerges and the infinity in which he is engulfed."
    ],
    [
        "author" => "Laura Teresa Marquez",
        "quote" => "Arrogance and rudeness are training wheels on the bicycle of life, for weak people who cannot keep their balance without them."
    ],
    [
        "author" => "Chinese proverb",
        "quote" => "If you are patient in one moment of anger, you will escape one hundred days of sorrow."
    ],
    [
        "author" => "Abraham Lincoln",
        "quote" => "When you have got an elephant by the hind legs and he is trying to run away, it's best to let him run."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "Courage is not about taking risks unknowingly but putting your own being in front of challenges that others may not be able to."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "Can miles truly separate you from friends... If you want to be with someone you love, aren't you already there?"
    ],
    [
        "author" => "Harry Kemp",
        "quote" => "The poor man is not he who is without a cent, but he who is without a dream."
    ],
    [
        "author" => "Benjamin Disraeli",
        "quote" => "The greatest good you can do for another is not just share your riches, but reveal to them their own."
    ],
    [
        "author" => "Buddha",
        "quote" => "Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment."
    ],
    [
        "author" => "Unknown",
        "quote" => "Peace of mind is not the absence of conflict from life, but the ability to cope with it."
    ],
    [
        "author" => "Helen Keller",
        "quote" => "Face your deficiencies and acknowledge them; but do not let them master you. Let them teach you patience, sweetness, insight."
    ],
    [
        "author" => "John Kennedy",
        "quote" => "Change is the law of life. And those who look only to the past or present are certain to miss the future."
    ],
    [
        "author" => "Marcus Aurelius",
        "quote" => "You have power over your mind, not outside events. Realize this, and you will find strength."
    ],
    [
        "author" => "Louis Pasteur",
        "quote" => "Let me tell you the secret that has led me to my goal: my strength lies solely in my tenacity."
    ],
    [
        "author" => "Buddha",
        "quote" => "We are what we think. All that we are arises with our thoughts. With our thoughts, we make the world."
    ],
    [
        "author" => "Henry Longfellow",
        "quote" => "He that respects himself is safe from others; he wears a coat of mail that none can pierce."
    ],
    [
        "author" => "Wayne Dyer",
        "quote" => "I cannot always control what goes on outside. But I can always control what goes on inside."
    ],
    [
        "author" => "Daisaku Ikeda",
        "quote" => "What matters is the value we've created in our lives, the people we've made happy and how much we've grown as people."
    ],
    [
        "author" => "Epictetus",
        "quote" => "When you are offended at any man's fault, turn to yourself and study your own failings. Then you will forget your anger."
    ],
    [
        "author" => "Rumi",
        "quote" => "Everyone has been made for some particular work, and the desire for that work has been put in every heart."
    ],
    [
        "author" => "Napoleon Bonaparte",
        "quote" => "Take time to deliberate, but when the time for action has arrived, stop thinking and go in."
    ],
    [
        "author" => "Dalai Lama",
        "quote" => "With realization of ones own potential and self-confidence in ones ability, one can build a better world."
    ],
    [
        "author" => "Franklin Roosevelt",
        "quote" => "Happiness is not in the mere possession of money; it lies in the joy of achievement, in the thrill of creative effort."
    ],
    [
        "author" => "Pearl Buck",
        "quote" => "You cannot make yourself feel something you do not feel, but you can make yourself do right in spite of your feelings."
    ],
    [
        "author" => "Mary Kay Ash",
        "quote" => "Those who are blessed with the most talent don't necessarily outperform everyone else. It's the people with follow-through who excel."
    ],
    [
        "author" => "Albert Einstein",
        "quote" => "Try not to become a man of success, but rather try to become a man of value."
    ],
    [
        "author" => "Sophocles",
        "quote" => "Men of perverse opinion do not know the excellence of what is in their hands, till some one dash it from them."
    ],
    [
        "author" => "Rene Descartes",
        "quote" => "It is not enough to have a good mind; the main thing is to use it well."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "Responsibility is not inherited, it is a choice that everyone needs to make at some point in their life."
    ],
    [
        "author" => "Amelia Earhart",
        "quote" => "Never do things others can do and will do, if there are things others cannot do or will not do."
    ],
    [
        "author" => "Jimmy Dean",
        "quote" => "I can't change the direction of the wind, but I can adjust my sails to always reach my destination."
    ],
    [
        "author" => "George Allen",
        "quote" => "People of mediocre ability sometimes achieve outstanding success because they don't know when to quit. Most men succeed because they are determined to."
    ],
    [
        "author" => "Joseph Roux",
        "quote" => "A fine quotation is a diamond on the finger of a man of wit, and a pebble in the hand of a fool."
    ],
    [
        "author" => "Bernice Reagon",
        "quote" => "Life's challenges are not supposed to paralyse you, they're supposed to help you discover who you are."
    ],
    [
        "author" => "Socrates",
        "quote" => "The greatest way to live with honour in this world is to be what we pretend to be."
    ],
    [
        "author" => "Henri Bergson",
        "quote" => "To exist is to change, to change is to mature, to mature is to go on creating oneself endlessly."
    ],
    [
        "author" => "Albert Einstein",
        "quote" => "Try not to become a man of success but rather try to become a man of value."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "You can't create in a vacuum. Life gives you the material and dreams can propel new beginnings."
    ],
    [
        "author" => "Buddha",
        "quote" => "Your work is to discover your world and then with all your heart give yourself to it."
    ],
    [
        "author" => "Daisaku Ikeda",
        "quote" => "The person who lives life fully, glowing with life's energy, is the person who lives a successful life."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "Don't turn away from possible futures before you're certain you don't have anything to learn from them."
    ],
    [
        "author" => "David Brinkley",
        "quote" => "A successful person is one who can lay a firm foundation with the bricks that others throw at him or her."
    ],
    [
        "author" => "Buddha",
        "quote" => "All that we are is the result of what we have thought. The mind is everything. What we think we become."
    ],
    [
        "author" => "Henri-Frederic Amiel",
        "quote" => "Work while you have the light. You are responsible for the talent that has been entrusted to you."
    ],
    [
        "author" => "William Shakespeare",
        "quote" => "How far that little candle throws its beams! So shines a good deed in a naughty world."
    ],
    [
        "author" => "Napoleon Hill",
        "quote" => "Every adversity, every failure, every heartache carries with it the seed of an equal or greater benefit."
    ],
    [
        "author" => "Tony Robbins",
        "quote" => "It is in your moments of decision that your destiny is shaped."
    ],
    [
        "author" => "Unknown",
        "quote" => "An obstacle may be either a stepping stone or a stumbling block."
    ],
    [
        "author" => "Pierre Auguste Renoir",
        "quote" => "The pain passes, but the beauty remains."
    ],
    [
        "author" => "Bob Newhart",
        "quote" => "All I can say about life is, Oh God, enjoy it!"
    ],
    [
        "author" => "Rita Mae Brown",
        "quote" => "Creativity comes from trust. Trust your instincts. And never hope more than you work."
    ],
    [
        "author" => "Lululemon",
        "quote" => "Your outlook on life is a direct reflection on how much you like yourself."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "I have just three things to teach: simplicity, patience, compassion. These three are your greatest treasures."
    ],
    [
        "author" => "Kin Hubbard",
        "quote" => "You won't skid if you stay in a rut."
    ],
    [
        "author" => "Mary Morrissey",
        "quote" => "You block your dream when you allow your fear to grow bigger than your faith."
    ],
    [
        "author" => "Aristotle",
        "quote" => "Happiness depends upon ourselves."
    ],
    [
        "author" => "Albert Schweitzer",
        "quote" => "Wherever a man turns he can find someone who needs him."
    ],
    [
        "author" => "Maya Angelou",
        "quote" => "If one is lucky, a solitary fantasy can totally transform one million realities."
    ],
    [
        "author" => "Leo Buscaglia",
        "quote" => "Never idealize others. They will never live up to your expectations."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "When you realize there is nothing lacking, the whole world belongs to you."
    ],
    [
        "author" => "Dalai Lama",
        "quote" => "Happiness is not something ready made. It comes from your own actions."
    ],
    [
        "author" => "Peter Elbow",
        "quote" => "Meaning is not what you start with but what you end up with."
    ],
    [
        "author" => "Anne Frank",
        "quote" => "No one has ever become poor by giving."
    ],
    [
        "author" => "Mother Teresa",
        "quote" => "Be faithful in small things because it is in them that your strength lies."
    ],
    [
        "author" => "Heraclitus",
        "quote" => "All is flux; nothing stays still."
    ],
    [
        "author" => "Leonardo da Vinci",
        "quote" => "He who is fixed to a star does not change his mind."
    ],
    [
        "author" => "Marcus Aurelius",
        "quote" => "He who lives in harmony with himself lives in harmony with the universe."
    ],
    [
        "author" => "Sophocles",
        "quote" => "Ignorant men don't know what good they hold in their hands until they've flung it away."
    ],
    [
        "author" => "Albert Einstein",
        "quote" => "When the solution is simple, God is answering."
    ],
    [
        "author" => "Napoleon Hill",
        "quote" => "All achievements, all earned riches, have their beginning in an idea."
    ],
    [
        "author" => "Publilius Syrus",
        "quote" => "Do not turn back when you are just at the goal."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "You can't trust without risk but neither can you live in a cocoon."
    ],
    [
        "author" => "Rudolf Arnheim",
        "quote" => "All perceiving is also thinking, all reasoning is also intuition, all observation is also invention."
    ],
    [
        "author" => "Channing",
        "quote" => "Error is discipline through which we advance."
    ],
    [
        "author" => "Pearl Buck",
        "quote" => "The truth is always exciting. Speak it, then. Life is dull without it."
    ],
    [
        "author" => "Confucius",
        "quote" => "The superior man is modest in his speech, but exceeds in his actions."
    ],
    [
        "author" => "Voltaire",
        "quote" => "The longer we dwell on our misfortunes, the greater is their power to harm us."
    ],
    [
        "author" => "Cervantes",
        "quote" => "Those who will play with cats must expect to be scratched."
    ],
    [
        "author" => "Unknown",
        "quote" => "I've never seen a smiling face that was not beautiful."
    ],
    [
        "author" => "Aristotle",
        "quote" => "In all things of nature there is something of the marvellous."
    ],
    [
        "author" => "Marcus Aurelius",
        "quote" => "The universe is transformation; our life is what our thoughts make it."
    ],
    [
        "author" => "Samuel Johnson",
        "quote" => "Memory is the mother of all wisdom."
    ],
    [
        "author" => "Confucius",
        "quote" => "Silence is the true friend that never betrays."
    ],
    [
        "author" => "Napoleon Hill",
        "quote" => "You might well remember that nothing can bring you success but yourself."
    ],
    [
        "author" => "Benjamin Franklin",
        "quote" => "Watch the little things; a small leak will sink a great ship."
    ],
    [
        "author" => "William Shakespeare",
        "quote" => "God has given you one face, and you make yourself another."
    ],
    [
        "author" => "Confucius",
        "quote" => "To be wronged is nothing unless you continue to remember it."
    ],
    [
        "author" => "Unknown",
        "quote" => "Kindness is the greatest wisdom."
    ],
    [
        "author" => "Tehyi Hsieh",
        "quote" => "Action will remove the doubts that theory cannot solve."
    ],
    [
        "author" => "Unknown",
        "quote" => "Don't miss all the beautiful colors of the rainbow looking for that pot of gold."
    ],
    [
        "author" => "Napoleon Hill",
        "quote" => "Your big opportunity may be right where you are now."
    ],
    [
        "author" => "Chinese proverb",
        "quote" => "People who say it cannot be done should not interrupt those who are doing it."
    ],
    [
        "author" => "Japanese proverb",
        "quote" => "The day you decide to do it is your lucky day."
    ],
    [
        "author" => "Cicero",
        "quote" => "We must not say every mistake is a foolish one."
    ],
    [
        "author" => "George Patton",
        "quote" => "Accept challenges, so that you may feel the exhilaration of victory."
    ],
    [
        "author" => "Anatole France",
        "quote" => "It is better to understand a little than to misunderstand a lot."
    ],
    [
        "author" => "Unknown",
        "quote" => "You don't drown by falling in water. You drown by staying there."
    ],
    [
        "author" => "Unknown",
        "quote" => "Never be afraid to try, remember... Amateurs built the ark, Professionals built the Titanic."
    ],
    [
        "author" => "Johann Wolfgang von Goethe",
        "quote" => "Correction does much, but encouragement does more."
    ],
    [
        "author" => "Epictetus",
        "quote" => "Know, first, who you are, and then adorn yourself accordingly."
    ],
    [
        "author" => "Oprah Winfrey",
        "quote" => "The biggest adventure you can ever take is to live the life of your dreams."
    ],
    [
        "author" => "Charles Swindoll",
        "quote" => "Life is 10% what happens to you and 90% how you react to it."
    ],
    [
        "author" => "Cynthia Ozick",
        "quote" => "To want to be what one can be is purpose in life."
    ],
    [
        "author" => "Dalai Lama",
        "quote" => "Remember that sometimes not getting what you want is a wonderful stroke of luck."
    ],
    [
        "author" => "Winston Churchill",
        "quote" => "History will be kind to me for I intend to write it."
    ],
    [
        "author" => "Wayne Dyer",
        "quote" => "Our lives are a sum total of the choices we have made."
    ],
    [
        "author" => "Leonardo da Vinci",
        "quote" => "Time stays long enough for anyone who will use it."
    ],
    [
        "author" => "Unknown",
        "quote" => "Never tell me the sky's the limit when there are footprints on the moon."
    ],
    [
        "author" => "Denis Waitley",
        "quote" => "You must welcome change as the rule but not as your ruler."
    ],
    [
        "author" => "Jim Rohn",
        "quote" => "Give whatever you are doing and whoever you are with the gift of your attention."
    ],
    [
        "author" => "Lena Horne",
        "quote" => "Always be smarter than the people who hire you."
    ],
    [
        "author" => "Tom Peters",
        "quote" => "Formula for success: under promise and over deliver."
    ],
    [
        "author" => "Henri Bergson",
        "quote" => "The eye sees only what the mind is prepared to comprehend."
    ],
    [
        "author" => "Lee Mildon",
        "quote" => "People seldom notice old clothes if you wear a big smile."
    ],
    [
        "author" => "Shakti Gawain",
        "quote" => "The more light you allow within you, the brighter the world you live in will be."
    ],
    [
        "author" => "Walter Anderson",
        "quote" => "Nothing diminishes anxiety faster than action."
    ],
    [
        "author" => "Andre Gide",
        "quote" => "Man cannot discover new oceans unless he has the courage to lose sight of the shore."
    ],
    [
        "author" => "Carl Jung",
        "quote" => "Everything that irritates us about others can lead us to an understanding about ourselves."
    ],
    [
        "author" => "Sun Tzu",
        "quote" => "Can you imagine what I would do if I could do all I can?"
    ],
    [
        "author" => "Benjamin Disraeli",
        "quote" => "Ignorance never settle a question."
    ],
    [
        "author" => "Paul Cezanne",
        "quote" => "The awareness of our own strength makes us modest."
    ],
    [
        "author" => "Confucius",
        "quote" => "They must often change, who would be constant in happiness or wisdom."
    ],
    [
        "author" => "Tom Krause",
        "quote" => "There are no failures. Just experiences and your reactions to them."
    ],
    [
        "author" => "Frank Tyger",
        "quote" => "Your future depends on many things, but mostly on you."
    ],
    [
        "author" => "Dorothy Thompson",
        "quote" => "Fear grows in darkness; if you think theres a bogeyman around, turn on the light."
    ],
    [
        "author" => "Shunryu Suzuki",
        "quote" => "The most important point is to accept yourself and stand on your two feet."
    ],
    [
        "author" => "Tomas Eliot",
        "quote" => "Do not expect the world to look bright, if you habitually wear gray-brown glasses."
    ],
    [
        "author" => "Donald Trump",
        "quote" => "As long as your going to be thinking anyway, think big."
    ],
    [
        "author" => "John Dewey",
        "quote" => "Without some goals and some efforts to reach it, no man can live."
    ],
    [
        "author" => "Richard Braunstein",
        "quote" => "He who obtains has little. He who scatters has much."
    ],
    [
        "author" => "George Orwell",
        "quote" => "Myths which are believed in tend to become true."
    ],
    [
        "author" => "Buddha",
        "quote" => "The foot feels the foot when it feels the ground."
    ],
    [
        "author" => "John Petit-Senn",
        "quote" => "Not what we have but what we enjoy constitutes our abundance."
    ],
    [
        "author" => "George Eliot",
        "quote" => "It is never too late to be what you might have been."
    ],
    [
        "author" => "Mary Wollstonecraft",
        "quote" => "The beginning is always today."
    ],
    [
        "author" => "Sheldon Kopp",
        "quote" => "In the long run we get no more than we have been willing to risk giving."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "Self-trust is the first secret of success."
    ],
    [
        "author" => "Satchel Paige",
        "quote" => "Don't look back. Something might be gaining on you."
    ],
    [
        "author" => "Marcus Aurelius",
        "quote" => "Look back over the past, with its changing empires that rose and fell, and you can foresee the future, too."
    ],
    [
        "author" => "George Bernard Shaw",
        "quote" => "A life spent making mistakes is not only more honourable, but more useful than a life spent doing nothing."
    ],
    [
        "author" => "Epictetus",
        "quote" => "Men are disturbed not by things, but by the view which they take of them."
    ],
    [
        "author" => "Blaise Pascal",
        "quote" => "Imagination disposes of everything; it creates beauty, justice, and happiness, which are everything in this world."
    ],
    [
        "author" => "Mark Twain",
        "quote" => "Happiness is a Swedish sunset, it is there for all, but most of us look the other way and lose it."
    ],
    [
        "author" => "Unknown",
        "quote" => "A smile is a light in the window of your face to show your heart is at home."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "Look forward to spring as a time when you can start to see what nature has to offer once again."
    ],
    [
        "author" => "Billy Wilder",
        "quote" => "Trust your own instinct. Your mistakes might as well be your own, instead of someone elses."
    ],
    [
        "author" => "Blaise Pascal",
        "quote" => "The least movement is of importance to all nature. The entire ocean is affected by a pebble."
    ],
    [
        "author" => "Pablo Picasso",
        "quote" => "I am always doing that which I can not do, in order that I may learn how to do it."
    ],
    [
        "author" => "Niccolo Machiavelli",
        "quote" => "Men in general judge more from appearances than from reality. All men have eyes, but few have the gift of penetration."
    ],
    [
        "author" => "Unknown",
        "quote" => "You may only be someone in the world, but to someone else, you may be the world."
    ],
    [
        "author" => "Henry Ward Beecher",
        "quote" => "Every artist dips his brush in his own soul, and paints his own nature into his pictures."
    ],
    [
        "author" => "James Faust",
        "quote" => "If you take each challenge one step at a time, with faith in every footstep, your strength and understanding will increase."
    ],
    [
        "author" => "Denis Waitley",
        "quote" => "Happiness cannot be travelled to, owned, earned, worn or consumed. Happiness is the spiritual experience of living every minute with love, grace and gratitude."
    ],
    [
        "author" => "Hasidic saying",
        "quote" => "Everyone should carefully observe which way his heart draws him, and then choose that way with all his strength."
    ],
    [
        "author" => "Joseph Campbell",
        "quote" => "When we quit thinking primarily about ourselves and our own self-preservation, we undergo a truly heroic transformation of consciousness."
    ],
    [
        "author" => "Dhammapada",
        "quote" => "Do not give your attention to what others do or fail to do; give it to what you do or fail to do."
    ],
    [
        "author" => "Peter Drucker",
        "quote" => "Follow effective action with quiet reflection. From the quiet reflection will come even more effective action."
    ],
    [
        "author" => "Bernice Reagon",
        "quote" => "Life's challenges are not supposed to paralyze you, they're supposed to help you discover who you are."
    ],
    [
        "author" => "Fannie Hamer",
        "quote" => "There is one thing you have got to learn about our movement. Three people are better than no people."
    ],
    [
        "author" => "Ralph Waldo Emerson",
        "quote" => "Happiness is a perfume you cannot pour on others without getting a few drops on yourself."
    ],
    [
        "author" => "Byron Roberts",
        "quote" => "It is not the mistake that has the most power, instead, it is learning from the mistake to advance your own attributes."
    ],
    [
        "author" => "Thich Nhat Hanh",
        "quote" => "The amount of happiness that you have depends on the amount of freedom you have in your heart."
    ],
    [
        "author" => "Carl Jung",
        "quote" => "Your vision will become clear only when you look into your heart. Who looks outside, dreams. Who looks inside, awakens."
    ],
    [
        "author" => "Babatunde Olatunji",
        "quote" => "Yesterday is history. Tomorrow is a mystery. And today? Today is a gift. That is why we call it the present."
    ],
    [
        "author" => "Tony Robbins",
        "quote" => "The way we communicate with others and with ourselves ultimately determines the quality of our lives."
    ],
    [
        "author" => "Tony Blair",
        "quote" => "Sometimes it is better to lose and do the right thing than to win and do the wrong thing."
    ],
    [
        "author" => "Mother Teresa",
        "quote" => "Let us always meet each other with smile, for the smile is the beginning of love."
    ],
    [
        "author" => "Unknown",
        "quote" => "A bend in the road is not the end of the road...unless you fail to make the turn."
    ],
    [
        "author" => "Aristotle",
        "quote" => "We are what we repeatedly do. Excellence, then, is not an act, but a habit."
    ],
    [
        "author" => "Ray Bradbury",
        "quote" => "Living at risk is jumping off the cliff and building your wings on the way down."
    ],
    [
        "author" => "Albert Camus",
        "quote" => "In the depth of winter, I finally learned that there was within me an invincible summer."
    ],
    [
        "author" => "Madame de Stael",
        "quote" => "Wit lies in recognizing the resemblance among things which differ and the difference between things which are alike."
    ],
    [
        "author" => "Elbert Hubbard",
        "quote" => "A failure is a man who has blundered but is not capable of cashing in on the experience."
    ],
    [
        "author" => "Herbert Swope",
        "quote" => "I cannot give you the formula for success, but I can give you the formula for failure: which is: Try to please everybody."
    ],
    [
        "author" => "Unknown",
        "quote" => "One who asks a question is a fool for five minutes; one who does not ask a question remains a fool forever."
    ],
    [
        "author" => "Laozi",
        "quote" => "The power of intuitive understanding will protect you from harm until the end of your days."
    ],
    [
        "author" => "Abraham Lincoln",
        "quote" => "The best thing about the future is that it only comes one day at a time."
    ],
    [
        "author" => "Epictetus",
        "quote" => "We have two ears and one mouth so that we can listen twice as much as we speak."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "Fear of failure is one attitude that will keep you at the same point in your life."
    ],
    [
        "author" => "Ed Cunningham",
        "quote" => "Friends are those rare people who ask how we are and then wait to hear the answer."
    ],
    [
        "author" => "Pema Chodron",
        "quote" => "If we learn to open our hearts, anyone, including the people who drive us crazy, can be our teacher."
    ],
    [
        "author" => "Eleanor Roosevelt",
        "quote" => "People grow through experience if they meet life honestly and courageously. This is how character is built."
    ],
    [
        "author" => "Ralph Waldo Emerson",
        "quote" => "A hero is no braver than an ordinary man, but he is braver five minutes longer."
    ],
    [
        "author" => "Angela Schwindt",
        "quote" => "While we try to teach our children all about life, our children teach us what life is all about."
    ],
    [
        "author" => "Wayne Dyer",
        "quote" => "When you dance, your purpose is not to get to a certain place on the floor. It's to enjoy each step along the way."
    ],
    [
        "author" => "Dalai Lama",
        "quote" => "Genuine love should first be directed at oneself, if we do not love ourselves, how can we love others?"
    ],
    [
        "author" => "Orison Marden",
        "quote" => "The Creator has not given you a longing to do that which you have no ability to do."
    ],
    [
        "author" => "Sam Levenson",
        "quote" => "It's so simple to be wise. Just think of something stupid to say and then don't say it."
    ],
    [
        "author" => "Dalai Lama",
        "quote" => "Consider that not only do negative thoughts and emotions destroy our experience of peace, they also undermine our health."
    ],
    [
        "author" => "Doris Mortman",
        "quote" => "Until you make peace with who you are, you will never be content with what you have."
    ],
    [
        "author" => "Buddha",
        "quote" => "No one saves us but ourselves. No one can and no one may. We ourselves must walk the path."
    ],
    [
        "author" => "Henry Miller",
        "quote" => "The moment one gives close attention to anything, it becomes a mysterious, awesome, indescribably magnificent world in itself."
    ],
    [
        "author" => "Mohandas Gandhi",
        "quote" => "Happiness is when what you think, what you say, and what you do are in harmony."
    ],
    [
        "author" => "Dalai Lama",
        "quote" => "The greatest antidote to insecurity and the sense of fear is compassion, it brings one back to the basis of one's inner strength"
    ],
    [
        "author" => "Unknown",
        "quote" => "Courage is the discovery that you may not win, and trying when you know you can lose."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "To be thoughtful and kind only takes a few seconds compared to the timeless hurt caused by one rude gesture."
    ],
    [
        "author" => "Mortimer Adler",
        "quote" => "The purpose of learning is growth, and our minds, unlike our bodies, can continue growing as we continue to live."
    ],
    [
        "author" => "Buddha",
        "quote" => "When you realize how perfect everything is you will tilt your head back and laugh at the sky."
    ],
    [
        "author" => "Mary Kay Ash",
        "quote" => "For every failure, there's an alternative course of action. You just have to find it. When you come to a roadblock, take a detour."
    ],
    [
        "author" => "Walter Linn",
        "quote" => "It is surprising what a man can do when he has to, and how little most men will do when they don't have to."
    ],
    [
        "author" => "Tenzin Gyatso",
        "quote" => "To be aware of a single shortcoming in oneself is more useful than to be aware of a thousand in someone else."
    ],
    [
        "author" => "Edmund Burke",
        "quote" => "Nobody made a greater mistake than he who did nothing because he could do only a little."
    ],
    [
        "author" => "Albert Schweitzer",
        "quote" => "Constant kindness can accomplish much. As the sun makes ice melt, kindness causes misunderstanding, mistrust, and hostility to evaporate."
    ],
    [
        "author" => "Rene Descartes",
        "quote" => "The greatest minds are capable of the greatest vices as well as of the greatest virtues."
    ],
    [
        "author" => "Albert Einstein",
        "quote" => "A man should look for what is, and not for what he thinks should be."
    ],
    [
        "author" => "William Channing",
        "quote" => "Difficulties are meant to rouse, not discourage. The human spirit is to grow strong by conflict."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "If you have no respect for your own values how can you be worthy of respect from others."
    ],
    [
        "author" => "Alphonse Karr",
        "quote" => "Some people are always grumbling because roses have thorns; I am thankful that thorns have roses."
    ],
    [
        "author" => "W. H. Auden",
        "quote" => "To choose what is difficult all ones days, as if it were easy, that is faith."
    ],
    [
        "author" => "Lou Holtz",
        "quote" => "Ability is what you're capable of doing. Motivation determines what you do.Attitude determines how well you do it."
    ],
    [
        "author" => "Thomas Carlyle",
        "quote" => "Do not be embarrassed by your mistakes. Nothing can teach us better than our understanding of them. This is one of the best ways of self-education."
    ],
    [
        "author" => "Buddha",
        "quote" => "Thousands of candles can be lighted from a single candle, and the life of the candle will not be shortened. Happiness never decreases by being shared."
    ],
    [
        "author" => "Michel de Montaigne",
        "quote" => "I care not so much what I am to others as what I am to myself. I will be rich by myself, and not by borrowing."
    ],
    [
        "author" => "Margaret Laurence",
        "quote" => "Know that although in the eternal scheme of things you are small, you are also unique and irreplaceable, as are all your fellow humans everywhere in the world."
    ],
    [
        "author" => "Napoleon Bonaparte",
        "quote" => "To do all that one is able to do, is to be a man; to do all that one would like to do, is to be a god."
    ],
    [
        "author" => "Ajahn Chah",
        "quote" => "If you let go a little, you will have a little peace. If you let go a lot, you will have a lot of peace."
    ],
    [
        "author" => "Dalai Lama",
        "quote" => "There is no need for temples, no need for complicated philosophies. My brain and my heart are my temples; my philosophy is kindness."
    ],
    [
        "author" => "Vincent Lombardi",
        "quote" => "The spirit, the will to win, and the will to excel, are the things that endure. These qualities are so much more important than the events that occur."
    ],
    [
        "author" => "Jean-Paul Sartre",
        "quote" => "Man is not sum of what he has already, but rather the sum of what he does not yet have, of what he could have."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "Don't believe what your eyes are telling you. All they show is limitation. Look with your understanding, find out what you already know, and you'll see the way to fly."
    ],
    [
        "author" => "Elisabeth Kubler-Ross",
        "quote" => "I believe that we are solely responsible for our choices, and we have to accept the consequences of every deed, word, and thought throughout our lifetime."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "Wishes can be your best avenue of getting what you want when you turn wishes into action. Action moves your wish to the forefront from thought to reality."
    ],
    [
        "author" => "Kahlil Gibran",
        "quote" => "To understand the heart and mind of a person, look not at what he has already achieved, but at what he aspires to do."
    ],
    [
        "author" => "Bernard Shaw",
        "quote" => "I am of the opinion that my life belongs to the community, and as long as I live it is my privilege to do for it whatever I can."
    ],
    [
        "author" => "Albert Einstein",
        "quote" => "Imagination is more important than knowledge. For while knowledge defines all we currently know and understand, imagination points to all we might yet discover and create."
    ],
    [
        "author" => "Confucius",
        "quote" => "When you see a good person, think of becoming like him. When you see someone not so good, reflect on your own weak points."
    ],
    [
        "author" => "Anne Lindbergh",
        "quote" => "If one is estranged from oneself, then one is estranged from others too. If one is out of touch with oneself, then one cannot touch others."
    ],
    [
        "author" => "Dale Carnegie",
        "quote" => "Most of the important things in the world have been accomplished by people who have kept on trying when there seemed to be no hope at all."
    ],
    [
        "author" => "John Lennon",
        "quote" => "You may say Im a dreamer, but Im not the only one, I hope someday you will join us, and the world will live as one."
    ],
    [
        "author" => "Nathaniel Hawthorne",
        "quote" => "Happiness is as a butterfly which, when pursued, is always beyond our grasp, but which if you will sit down quietly, may alight upon you."
    ],
    [
        "author" => "Buddha",
        "quote" => "He who experiences the unity of life sees his own Self in all beings, and all beings in his own Self, and looks on everything with an impartial eye."
    ],
    [
        "author" => "Buddha",
        "quote" => "In the sky, there is no distinction of east and west; people create distinctions out of their own minds and then believe them to be true."
    ],
    [
        "author" => "Caroline Myss",
        "quote" => "You cannot change anything in your life with intention alone, which can become a watered-down, occasional hope that you'll get to tomorrow. Intention without action is useless."
    ],
    [
        "author" => "Winston Churchill",
        "quote" => "Before you can inspire with emotion, you must be swamped with it yourself. Before you can move their tears, your own must flow. To convince them, you must yourself believe."
    ],
    [
        "author" => "William James",
        "quote" => "The greatest discovery of our generation is that human beings can alter their lives by altering their attitudes of mind. As you think, so shall you be."
    ],
    [
        "author" => "Henry David Thoreau",
        "quote" => "If one advances confidently in the direction of his dream, and endeavours to live the life which he had imagines, he will meet with a success unexpected in common hours."
    ],
    [
        "author" => "Pearl Buck",
        "quote" => "The secret of joy in work is contained in one word, excellence. To know how to do something well is to enjoy it."
    ],
    [
        "author" => "Confucius",
        "quote" => "When you meet someone better than yourself, turn your thoughts to becoming his equal. When you meet someone not as good as you are, look within and examine your own self."
    ],
    [
        "author" => "Uta Hagen",
        "quote" => "We must overcome the notion that we must be regular. It robs you of the chance to be extraordinary and leads you to the mediocre."
    ],
    [
        "author" => "Orison Marden",
        "quote" => "Most of our obstacles would melt away if, instead of cowering before them, we should make up our minds to walk boldly through them."
    ],
    [
        "author" => "Victor Frankl",
        "quote" => "Everything can be taken from a man but ... the last of the human freedoms, to choose ones attitude in any given set of circumstances, to choose ones own way."
    ],
    [
        "author" => "Edward de Bono",
        "quote" => "It is better to have enough ideas for some of them to be wrong, than to be always right by having no ideas at all."
    ],
    [
        "author" => "Abraham Lincoln",
        "quote" => "Character is like a tree and reputation like a shadow. The shadow is what we think of it; the tree is the real thing."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "By letting it go it all gets done. The world is won by those who let it go. But when you try and try. The world is beyond the winning."
    ],
    [
        "author" => "Amy Tan",
        "quote" => "I am like a falling star who has finally found her place next to another in a lovely constellation, where we will sparkle in the heavens forever."
    ],
    [
        "author" => "Epictetus",
        "quote" => "Not every difficult and dangerous thing is suitable for training, but only that which is conducive to success in achieving the object of our effort."
    ],
    [
        "author" => "Stephen Covey",
        "quote" => "We are not animals. We are not a product of what has happened to us in our past. We have the power of choice."
    ],
    [
        "author" => "Paul Graham",
        "quote" => "The most dangerous way to lose time is not to spend it having fun, but to spend it doing fake work. When you spend time having fun, you know you're being self-indulgent."
    ],
    [
        "author" => "Buddha",
        "quote" => "Thousands of candles can be lit from a single, and the life of the candle will not be shortened. Happiness never decreases by being shared."
    ],
    [
        "author" => "Chuck Norris",
        "quote" => "A lot of times people look at the negative side of what they feel they can't do. I always look on the positive side of what I can do."
    ],
    [
        "author" => "Amiel",
        "quote" => "Without passion man is a mere latent force and possibility, like the flint which awaits the shock of the iron before it can give forth its spark."
    ],
    [
        "author" => "Amy Bloom",
        "quote" => "Love at first sight is easy to understand; its when two people have been looking at each other for a lifetime that it becomes a miracle."
    ],
    [
        "author" => "Keshavan Nair",
        "quote" => "With courage you will dare to take risks, have the strength to be compassionate, and the wisdom to be humble. Courage is the foundation of integrity."
    ],
    [
        "author" => "Margaret Smith",
        "quote" => "The right way is not always the popular and easy way. Standing for right when it is unpopular is a true test of moral character."
    ],
    [
        "author" => "Frederick Douglass",
        "quote" => "I prefer to be true to myself, even at the hazard of incurring the ridicule of others, rather than to be false, and to incur my own abhorrence."
    ],
    [
        "author" => "Helen Keller",
        "quote" => "No pessimist ever discovered the secrets of the stars, or sailed to an uncharted land, or opened a new heaven to the human spirit."
    ],
    [
        "author" => "Marcus Aurelius",
        "quote" => "When you arise in the morning, think of what a precious privilege it is to be alive, to breathe, to think, to enjoy, to love."
    ],
    [
        "author" => "Helen Keller",
        "quote" => "Character cannot be developed in ease and quiet. Only through experience of trial and suffering can the soul be strengthened, vision cleared, ambition inspired, and success achieved."
    ],
    [
        "author" => "Oprah Winfrey",
        "quote" => "Although there may be tragedy in your life, there's always a possibility to triumph. It doesn't matter who you are, where you come from. The ability to triumph begins with you. Always."
    ],
    [
        "author" => "Ingrid Bergman",
        "quote" => "You must train your intuition, you must trust the small voice inside you which tells you exactly what to say, what to decide."
    ],
    [
        "author" => "Marcus Aurelius",
        "quote" => "Accept the things to which fate binds you, and love the people with whom fate brings you together, but do so with all your heart."
    ],
    [
        "author" => "John Kennedy",
        "quote" => "Let us resolve to be masters, not the victims, of our history, controlling our own destiny without giving way to blind suspicions and emotions."
    ],
    [
        "author" => "Marie Curie",
        "quote" => "Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less."
    ],
    [
        "author" => "Anne Frank",
        "quote" => "Parents can only give good advice or put them on the right paths, but the final forming of a persons character lies in their own hands."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "Adversity isn't set against you to fail; adversity is a way to build your character so that you can succeed over and over again through perseverance."
    ],
    [
        "author" => "Robert Fulghum",
        "quote" => "If you break your neck, if you have nothing to eat, if your house is on fire, then you got a problem. Everything else is inconvenience."
    ],
    [
        "author" => "Albert Schweitzer",
        "quote" => "Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful."
    ],
    [
        "author" => "Albert Einstein",
        "quote" => "If A is success in life, then A equals x plus y plus z. Work is x; y is play; and z is keeping your mouth shut."
    ],
    [
        "author" => "Thornton Wilder",
        "quote" => "My advice to you is not to inquire why or whither, but just enjoy your ice cream while its on your plate, that's my philosophy."
    ],
    [
        "author" => "John Dewey",
        "quote" => "Conflict is the gadfly of thought. It stirs us to observation and memory. It instigates to invention. It shocks us out of sheeplike passivity, and sets us at noting and contriving."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "He who conquers others is strong; He who conquers himself is mighty."
    ],
    [
        "author" => "Wayne Dyer",
        "quote" => "Anything you really want, you can attain, if you really go after it."
    ],
    [
        "author" => "John Dewey",
        "quote" => "Arriving at one point is the starting point to another."
    ],
    [
        "author" => "James Oppenheim",
        "quote" => "The foolish man seeks happiness in the distance, the wise grows it under his feet."
    ],
    [
        "author" => "Martha Washington",
        "quote" => "The greatest part of our happiness depends on our dispositions, not our circumstances."
    ],
    [
        "author" => "Margaret Bonnano",
        "quote" => "It is only possible to live happily ever after on a day to day basis."
    ],
    [
        "author" => "Goethe",
        "quote" => "A man sees in the world what he carries in his heart."
    ],
    [
        "author" => "Benjamin Disraeli",
        "quote" => "Action may not always bring happiness, but there is no happiness without action."
    ],
    [
        "author" => "Joe Paterno",
        "quote" => "Believe deep down in your heart that you're destined to do great things."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "Sooner or later, those who win are those who think they can."
    ],
    [
        "author" => "Tony Robbins",
        "quote" => "The only limit to your impact is your imagination and commitment."
    ],
    [
        "author" => "Cathy Pulsifer",
        "quote" => "You are special, you are unique, you are the best!"
    ],
    [
        "author" => "William Arthur Ward",
        "quote" => "Four steps to achievement: Plan purposefully. Prepare prayerfully. Proceed positively. Pursue persistently."
    ],
    [
        "author" => "Bruce Lee",
        "quote" => "To know oneself is to study oneself in action with another person."
    ],
    [
        "author" => "Bishop Desmond Tutu",
        "quote" => "We must not allow ourselves to become like the system we oppose."
    ],
    [
        "author" => "Thich Nhat Hanh",
        "quote" => "Smile, breathe and go slowly."
    ],
    [
        "author" => "Albert Einstein",
        "quote" => "Reality is merely an illusion, albeit a very persistent one."
    ],
    [
        "author" => "Franklin Roosevelt",
        "quote" => "When you come to the end of your rope, tie a knot and hang on."
    ],
    [
        "author" => "Buddha",
        "quote" => "Always be mindful of the kindness and not the faults of others."
    ],
    [
        "author" => "Carl Jung",
        "quote" => "Everything that irritates us about others can lead us to an understanding of ourselves."
    ],
    [
        "author" => "Dale Carnegie",
        "quote" => "When fate hands us a lemon, lets try to make lemonade."
    ],
    [
        "author" => "Mohandas Gandhi",
        "quote" => "The weak can never forgive. Forgiveness is the attribute of the strong."
    ],
    [
        "author" => "Chanakya",
        "quote" => "A man is great by deeds, not by birth."
    ],
    [
        "author" => "Dale Carnegie",
        "quote" => "Success is getting what you want. Happiness is wanting what you get."
    ],
    [
        "author" => "Unknown",
        "quote" => "Put your future in good hands, your own."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "Truth isn't all about what actually happens but more about how what has happened is interpreted."
    ],
    [
        "author" => "Unknown",
        "quote" => "A good rest is half the work."
    ],
    [
        "author" => "Robert Stevenson",
        "quote" => "Don't judge each day by the harvest you reap but by the seeds that you plant."
    ],
    [
        "author" => "Demosthenes",
        "quote" => "Small opportunities are often the beginning of great enterprises."
    ],
    [
        "author" => "Gail Sheehy",
        "quote" => "To be tested is good. The challenged life may be the best therapist."
    ],
    [
        "author" => "English proverb",
        "quote" => "Take heed: you do not find what you do not seek."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "Happiness is the reward we get for living to the highest right we know."
    ],
    [
        "author" => "Cervantes",
        "quote" => "Be slow of tongue and quick of eye."
    ],
    [
        "author" => "Mohandas Gandhi",
        "quote" => "Freedom is not worth having if it does not connote freedom to err."
    ],
    [
        "author" => "John Locke",
        "quote" => "I have always thought the actions of men the best interpreters of their thoughts."
    ],
    [
        "author" => "Soren Kierkegaard",
        "quote" => "To dare is to lose ones footing momentarily. To not dare is to lose oneself."
    ],
    [
        "author" => "David Eddings",
        "quote" => "No day in which you learn something is a complete loss."
    ],
    [
        "author" => "Albert Einstein",
        "quote" => "Peace cannot be kept by force. It can only be achieved by understanding."
    ],
    [
        "author" => "David McCullough",
        "quote" => "Real success is finding your lifework in the work that you love."
    ],
    [
        "author" => "Buddha",
        "quote" => "Better than a thousand hollow words, is one word that brings peace."
    ],
    [
        "author" => "Unknown",
        "quote" => "All the flowers of all the tomorrows are in the seeds of today."
    ],
    [
        "author" => "Joseph Campbell",
        "quote" => "Your sacred space is where you can find yourself again and again."
    ],
    [
        "author" => "Bruce Lee",
        "quote" => "As you think, so shall you become."
    ],
    [
        "author" => "William Blake",
        "quote" => "In seed time learn, in harvest teach, in winter enjoy."
    ],
    [
        "author" => "Cheng Yen",
        "quote" => "Happiness does not come from having much, but from being attached to little."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "Every gift from a friend is a wish for your happiness."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "Go put your creed into the deed. Nor speak with double tongue."
    ],
    [
        "author" => "Euripides",
        "quote" => "The wisest men follow their own direction."
    ],
    [
        "author" => "William Sloane Coffin",
        "quote" => "Hope arouses, as nothing else can arouse, a passion for the possible."
    ],
    [
        "author" => "Confucius",
        "quote" => "Everything has beauty, but not everyone sees it."
    ],
    [
        "author" => "Pema Chodron",
        "quote" => "Nothing ever goes away until it has taught us what we need to know."
    ],
    [
        "author" => "Maya Angelou",
        "quote" => "When you learn, teach. When you get, give."
    ],
    [
        "author" => "Dorothy Thompson",
        "quote" => "Only when we are no longer afraid do we begin to live."
    ],
    [
        "author" => "Andy Rooney",
        "quote" => "If you smile when no one else is around, you really mean it."
    ],
    [
        "author" => "Martin Luther King, Jr.",
        "quote" => "Love is the only force capable of transforming an enemy into friend."
    ],
    [
        "author" => "Carl Jung",
        "quote" => "In all chaos there is a cosmos, in all disorder a secret order."
    ],
    [
        "author" => "Unknown",
        "quote" => "A man is not where he lives but where he loves."
    ],
    [
        "author" => "Winston Churchill",
        "quote" => "The price of greatness is responsibility."
    ],
    [
        "author" => "Paul Tillich",
        "quote" => "Decision is a risk rooted in the courage of being free."
    ],
    [
        "author" => "William Burroughs",
        "quote" => "Your mind will answer most questions if you learn to relax and wait for the answer."
    ],
    [
        "author" => "Unknown",
        "quote" => "The world doesn't happen to you it happens from you."
    ],
    [
        "author" => "Albert Einstein",
        "quote" => "We cannot solve our problems with the same thinking we used when we created them."
    ],
    [
        "author" => "Unknown",
        "quote" => "More powerful than the will to win is the courage to begin."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "Learning is finding out what you already know."
    ],
    [
        "author" => "Alfred Painter",
        "quote" => "Saying thank you is more than good manners. It is good spirituality."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "Silence is a source of great strength."
    ],
    [
        "author" => "Anne Lamott",
        "quote" => "Joy is the best makeup."
    ],
    [
        "author" => "Seneca",
        "quote" => "There is no great genius without some touch of madness."
    ],
    [
        "author" => "Buddha",
        "quote" => "A jug fills drop by drop."
    ],
    [
        "author" => "Doris Mortman",
        "quote" => "Until you make peace with who you are, you'll never be content with what you have."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "We aim above the mark to hit the mark."
    ],
    [
        "author" => "Catherine Pulsifer",
        "quote" => "Being angry never solves anything."
    ],
    [
        "author" => "Orison Marden",
        "quote" => "All men who have achieved great things have been great dreamers."
    ],
    [
        "author" => "Arthur Conan Doyle",
        "quote" => "Mediocrity knows nothing higher than itself, but talent instantly recognizes genius."
    ],
    [
        "author" => "Walter Lippmann",
        "quote" => "Where all think alike, no one thinks very much."
    ],
    [
        "author" => "Marcus Aurelius",
        "quote" => "Everything that exists is in a manner the seed of that which will be."
    ],
    [
        "author" => "Marie Curie",
        "quote" => "Be less curious about people and more curious about ideas."
    ],
    [
        "author" => "Charles Perkhurst",
        "quote" => "The heart has eyes which the brain knows nothing of."
    ],
    [
        "author" => "Robert Kennedy",
        "quote" => "Only those who dare to fail greatly can ever achieve greatly."
    ],
    [
        "author" => "Richard Whately",
        "quote" => "Lose an hour in the morning, and you will spend all day looking for it."
    ],
    [
        "author" => "Bruce Lee",
        "quote" => "Mistakes are always forgivable, if one has the courage to admit them."
    ],
    [
        "author" => "William Shakespeare",
        "quote" => "Go to your bosom: Knock there, and ask your heart what it doth know."
    ],
    [
        "author" => "Dalai Lama",
        "quote" => "Happiness mainly comes from our own attitude, rather than from external factors."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "If you do not change direction, you may end up where you are heading."
    ],
    [
        "author" => "Unknown",
        "quote" => "What we see is mainly what we look for."
    ],
    [
        "author" => "Marsha Petrie Sue",
        "quote" => "Stay away from what might have been and look at what will be."
    ],
    [
        "author" => "William James",
        "quote" => "Act as if what you do makes a difference. It does."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "Passion creates the desire for more and action fuelled by passion creates a future."
    ],
    [
        "author" => "Alexander Pope",
        "quote" => "Do good by stealth, and blush to find it fame."
    ],
    [
        "author" => "Napoleon Hill",
        "quote" => "Opportunity often comes disguised in the form of misfortune, or temporary defeat."
    ],
    [
        "author" => "Thomas Jefferson",
        "quote" => "Don't talk about what you have done or what you are going to do."
    ],
    [
        "author" => "Seneca",
        "quote" => "Most powerful is he who has himself in his own power."
    ],
    [
        "author" => "Bernard Shaw",
        "quote" => "We don't stop playing because we grow old; we grow old because we stop playing."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "Experience can only be gained by doing not by thinking or dreaming."
    ],
    [
        "author" => "Mark Twain",
        "quote" => "Always tell the truth. That way, you don't have to remember what you said."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "From wonder into wonder existence opens."
    ],
    [
        "author" => "Napoleon Bonaparte",
        "quote" => "He who fears being conquered is sure of defeat."
    ],
    [
        "author" => "John Lennon",
        "quote" => "Life is what happens while you are making other plans."
    ],
    [
        "author" => "Wayne Dyer",
        "quote" => "Doing what you love is the cornerstone of having abundance in your life."
    ],
    [
        "author" => "Johann Wolfgang von Goethe",
        "quote" => "Kindness is the golden chain by which society is bound together."
    ],
    [
        "author" => "Nietzsche",
        "quote" => "You need chaos in your soul to give birth to a dancing star."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "It can't be spring if your heart is filled with past failures."
    ],
    [
        "author" => "Brendan Francis",
        "quote" => "No yesterdays are ever wasted for those who give themselves to today."
    ],
    [
        "author" => "Tom Krause",
        "quote" => "There are no failures, just experiences and your reactions to them."
    ],
    [
        "author" => "Pablo Picasso",
        "quote" => "Action is the foundational key to all success."
    ],
    [
        "author" => "Abraham Maslow",
        "quote" => "What is necessary to change a person is to change his awareness of himself."
    ],
    [
        "author" => "Zig Ziglar",
        "quote" => "Positive thinking will let you do everything better than negative thinking will."
    ],
    [
        "author" => "Mother Teresa",
        "quote" => "We shall never know all the good that a simple smile can do."
    ],
    [
        "author" => "Frances de Sales",
        "quote" => "Nothing is so strong as gentleness. Nothing is so gentle as real strength."
    ],
    [
        "author" => "Ralph Waldo Emerson",
        "quote" => "Imagination is not a talent of some men but is the health of every man."
    ],
    [
        "author" => "Kenji Miyazawa",
        "quote" => "We must embrace pain and burn it as fuel for our journey."
    ],
    [
        "author" => "Unknown",
        "quote" => "Don't wait for people to be friendly. Show them how."
    ],
    [
        "author" => "Chinese proverb",
        "quote" => "A gem cannot be polished without friction, nor a man perfected without trials."
    ],
    [
        "author" => "George Matthew Adams",
        "quote" => "Each day can be one of triumph if you keep up your interests."
    ],
    [
        "author" => "Robert M. Pirsig",
        "quote" => "The place to improve the world is first in one's own heart and head and hands."
    ],
    [
        "author" => "Winston Churchill",
        "quote" => "The pessimist sees difficulty in every opportunity. The optimist sees the opportunity in every difficulty."
    ],
    [
        "author" => "Albert Gray",
        "quote" => "Winners have simply formed the habit of doing things losers don't like to do."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "Nature is a mutable cloud which is always and never the same."
    ],
    [
        "author" => "Grandma Moses",
        "quote" => "Life is what you make of it. Always has been, always will be."
    ],
    [
        "author" => "Swedish proverb",
        "quote" => "Worry often gives a small thing a big shadow."
    ],
    [
        "author" => "Confucius",
        "quote" => "I want you to be everything that's you, deep at the center of your being."
    ],
    [
        "author" => "William Shakespeare",
        "quote" => "We know what we are, but know not what we may be."
    ],
    [
        "author" => "Jean-Paul Sartre",
        "quote" => "Freedom is what you do with what's been done to you."
    ],
    [
        "author" => "Felix Adler",
        "quote" => "The truth which has made us free will in the end make us glad also."
    ],
    [
        "author" => "Joseph Joubert",
        "quote" => "He who has imagination without learning has wings but no feet."
    ],
    [
        "author" => "Elizabeth Browning",
        "quote" => "Whoso loves, believes the impossible."
    ],
    [
        "author" => "Ella Fitzgerald",
        "quote" => "It isn't where you come from, it's where you're going that counts."
    ],
    [
        "author" => "Pema Chodron",
        "quote" => "The greatest obstacle to connecting with our joy is resentment."
    ],
    [
        "author" => "C. Pulsifer",
        "quote" => "When anger use your energy to do something productive."
    ],
    [
        "author" => "Blaise Pascal",
        "quote" => "We are all something, but none of us are everything."
    ],
    [
        "author" => "Albert Einstein",
        "quote" => "If you can't explain it simply, you don't understand it well enough."
    ],
    [
        "author" => "Marcus Aurelius",
        "quote" => "He who lives in harmony with himself lives in harmony with the world."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "He who knows himself is enlightened."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "Build a better mousetrap and the world will beat a path to your door."
    ],
    [
        "author" => "Abraham Lincoln",
        "quote" => "As our case is new, we must think and act anew."
    ],
    [
        "author" => "Mother Teresa",
        "quote" => "If you can't feed a hundred people, then feed just one."
    ],
    [
        "author" => "Robert Frost",
        "quote" => "In three words I can sum up everything Ive learned about life: it goes on."
    ],
    [
        "author" => "Unknown",
        "quote" => "Don't let today's disappointments cast a shadow on tomorrow's dreams."
    ],
    [
        "author" => "Tony Robbins",
        "quote" => "You always succeed in producing a result."
    ],
    [
        "author" => "Wayne Dyer",
        "quote" => "Everything you are against weakens you. Everything you are for empowers you."
    ],
    [
        "author" => "Fran Watson",
        "quote" => "As we risk ourselves, we grow. Each new experience is a risk."
    ],
    [
        "author" => "Mary Almanac",
        "quote" => "Who we are never changes. Who we think we are does."
    ],
    [
        "author" => "Elbert Hubbard",
        "quote" => "The final proof of greatness lies in being able to endure criticism without resentment."
    ],
    [
        "author" => "Victor Hugo",
        "quote" => "An invasion of armies can be resisted, but not an idea whose time has come."
    ],
    [
        "author" => "Unknown",
        "quote" => "Never let lack of money interfere with having fun."
    ],
    [
        "author" => "Ralph Marston",
        "quote" => "Excellence is not a skill. It is an attitude."
    ],
    [
        "author" => "Lewis Cass",
        "quote" => "People may doubt what you say, but they will believe what you do."
    ],
    [
        "author" => "Thomas Paine",
        "quote" => "The most formidable weapon against errors of every kind is reason."
    ],
    [
        "author" => "Danilo Dolci",
        "quote" => "It's important to know that words don't move mountains. Work, exacting work moves mountains."
    ],
    [
        "author" => "Franz Liszt",
        "quote" => "Beware of missing chances; otherwise it may be altogether too late some day."
    ],
    [
        "author" => "Buddha",
        "quote" => "You only lose what you cling to."
    ],
    [
        "author" => "Corita Kent",
        "quote" => "Life is a succession of moments. To live each one is to succeed."
    ],
    [
        "author" => "Ralph Waldo Emerson",
        "quote" => "Most of the shadows of life are caused by standing in our own sunshine."
    ],
    [
        "author" => "Plato",
        "quote" => "Good actions give strength to ourselves and inspire good actions in others."
    ],
    [
        "author" => "Antoine de Saint-Exupery",
        "quote" => "I know but one freedom and that is the freedom of the mind."
    ],
    [
        "author" => "Albert Einstein",
        "quote" => "In the middle of every difficulty lies opportunity."
    ],
    [
        "author" => "Buddha",
        "quote" => "Every human being is the author of his own health or disease."
    ],
    [
        "author" => "Mark Twain",
        "quote" => "When in doubt, tell the truth."
    ],
    [
        "author" => "John Dewey",
        "quote" => "Every great advance in science has issued from a new audacity of the imagination."
    ],
    [
        "author" => "Napoleon Hill",
        "quote" => "The ladder of success is never crowded at the top."
    ],
    [
        "author" => "Unknown",
        "quote" => "He who has health has hope, and he who has hope has everything."
    ],
    [
        "author" => "Maya Angelou",
        "quote" => "All great achievements require time."
    ],
    [
        "author" => "Alice Walker",
        "quote" => "No person is your friend who demands your silence, or denies your right to grow."
    ],
    [
        "author" => "Charles Chesnutt",
        "quote" => "Impossibilities are merely things which we have not yet learned."
    ],
    [
        "author" => "Japanese proverb",
        "quote" => "Vision without action is a daydream. Action without vision is a nightmare."
    ],
    [
        "author" => "Confucius",
        "quote" => "The Superior Man is aware of Righteousness, the inferior man is aware of advantage."
    ],
    [
        "author" => "Elizabeth Kenny",
        "quote" => "He who angers you conquers you."
    ],
    [
        "author" => "Winston Churchill",
        "quote" => "I never worry about action, but only inaction."
    ],
    [
        "author" => "Epictetus",
        "quote" => "No man is free who is not master of himself."
    ],
    [
        "author" => "Aristotle",
        "quote" => "Those that know, do. Those that understand, teach."
    ],
    [
        "author" => "Thich Nhat Hanh",
        "quote" => "If we are not fully ourselves, truly in the present moment, we miss everything."
    ],
    [
        "author" => "Aesop",
        "quote" => "No act of kindness, no matter how small, is ever wasted."
    ],
    [
        "author" => "Channing",
        "quote" => "Every man is a volume if you know how to read him."
    ],
    [
        "author" => "Unknown",
        "quote" => "The difficulties of life are intended to make us better, not bitter."
    ],
    [
        "author" => "Henry Ford",
        "quote" => "Quality means doing it right when no one is looking."
    ],
    [
        "author" => "Unknown",
        "quote" => "Change your words. Change your world."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "Great acts are made up of small deeds."
    ],
    [
        "author" => "Mal Pancoast",
        "quote" => "The odds of hitting your target go up dramatically when you aim at it."
    ],
    [
        "author" => "Unknown",
        "quote" => "Open minds lead to open doors."
    ],
    [
        "author" => "Virgil",
        "quote" => "They can do all because they think they can."
    ],
    [
        "author" => "Donald Trump",
        "quote" => "You have to think anyway, so why not think big?"
    ],
    [
        "author" => "Edward Young",
        "quote" => "On every thorn, delightful wisdom grows, In every rill a sweet instruction flows."
    ],
    [
        "author" => "Buddha",
        "quote" => "Your body is precious. It is our vehicle for awakening. Treat it with care."
    ],
    [
        "author" => "Claire Charmont",
        "quote" => "The one who always loses, is the only person who gets the reward."
    ],
    [
        "author" => "Pema Chodron",
        "quote" => "The future is completely open, and we are writing it moment to moment."
    ],
    [
        "author" => "Unknown",
        "quote" => "Each time we face a fear, we gain strength, courage, and confidence in the doing."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "Ask yourself the secret of your success. Listen to your answer, and practice it."
    ],
    [
        "author" => "Sinvyest Tan",
        "quote" => "Don't frown because you never know who is falling in love with your smile."
    ],
    [
        "author" => "Joyce Brothers",
        "quote" => "Trust your hunches. They're usually based on facts filed away just below the conscious level."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "Nothing is at last sacred but the integrity of your own mind."
    ],
    [
        "author" => "Anthony D'Angelo",
        "quote" => "Listen to your intuition. It will tell you everything you need to know."
    ],
    [
        "author" => "Anais Nin",
        "quote" => "The personal life deeply lived always expands into truths beyond itself."
    ],
    [
        "author" => "Eckhart Tolle",
        "quote" => "Whenever something negative happens to you, there is a deep lesson concealed within it."
    ],
    [
        "author" => "Goethe",
        "quote" => "What is not started today is never finished tomorrow."
    ],
    [
        "author" => "Gordon Hinckley",
        "quote" => "Our kindness may be the most persuasive argument for that which we believe."
    ],
    [
        "author" => "Buddha",
        "quote" => "Chaos is inherent in all compounded things. Strive on with diligence."
    ],
    [
        "author" => "Abraham Lincoln",
        "quote" => "Be sure you put your feet in the right place, then stand firm."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "Nothing great was ever achieved without enthusiasm."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "The meaning I picked, the one that changed my life: Overcome fear, behold wonder."
    ],
    [
        "author" => "Plutarch",
        "quote" => "Know how to listen, and you will profit even from those who talk badly."
    ],
    [
        "author" => "Edmond Rostand",
        "quote" => "A man is not old as long as he is seeking something."
    ],
    [
        "author" => "Ymber Delecto",
        "quote" => "The time you think you're missing, misses you too."
    ],
    [
        "author" => "Michael Vance",
        "quote" => "Life is not measured by the breaths you take, but by its breathtaking moments."
    ],
    [
        "author" => "Sophocles",
        "quote" => "Much wisdom often goes with fewer words."
    ],
    [
        "author" => "Bruce Lee",
        "quote" => "If you love life, don't waste time, for time is what life is made up of."
    ],
    [
        "author" => "Samuel Taylor Coleridge",
        "quote" => "Imagination is the living power and prime agent of all human perception."
    ],
    [
        "author" => "Naomi Williams",
        "quote" => "It is impossible to feel grateful and depressed in the same moment."
    ],
    [
        "author" => "Frederick Wilcox",
        "quote" => "Progress always involves risks. You can't steal second base and keep your foot on first."
    ],
    [
        "author" => "Simone Weil",
        "quote" => "Liberty, taking the word in its concrete sense, consists in the ability to choose."
    ],
    [
        "author" => "John Dryden",
        "quote" => "A thing well said will be wit in all languages."
    ],
    [
        "author" => "Og Mandino",
        "quote" => "Always do your best. What you plant now, you will harvest later."
    ],
    [
        "author" => "Forrest Gump",
        "quote" => "My mama always said: life's like a box of chocolate, you never know what you gonna get."
    ],
    [
        "author" => "Jean Lacordaire",
        "quote" => "We are the leaves of one branch, the drops of one sea, the flowers of one garden."
    ],
    [
        "author" => "Unknown",
        "quote" => "If you come to a fork in the road, take it."
    ],
    [
        "author" => "Moliere",
        "quote" => "It is not only for what we do that we are held responsible, but also for what we do not do."
    ],
    [
        "author" => "Unknown",
        "quote" => "Nobody can do everything, but everybody can do something."
    ],
    [
        "author" => "Napoleon Hill",
        "quote" => "The world has the habit of making room for the man whose actions show that he knows where he is going."
    ],
    [
        "author" => "Heraclitus",
        "quote" => "You cannot step twice into the same river, for other waters are continually flowing in."
    ],
    [
        "author" => "Booker Washington",
        "quote" => "Excellence is to do a common thing in an uncommon way."
    ],
    [
        "author" => "Buddha",
        "quote" => "No matter how hard the past, you can always begin again."
    ],
    [
        "author" => "Pablo Picasso",
        "quote" => "I begin with an idea and then it becomes something else."
    ],
    [
        "author" => "Mark Twain",
        "quote" => "Whoever is happy will make others happy, too."
    ],
    [
        "author" => "Buddha",
        "quote" => "Your work is to discover your work and then with all your heart to give yourself to it."
    ],
    [
        "author" => "Epictetus",
        "quote" => "It's not what happens to you, but how you react to it that matters."
    ],
    [
        "author" => "Woody Guthrie",
        "quote" => "Take it easy, but take it."
    ],
    [
        "author" => "Benjamin Disraeli",
        "quote" => "Never apologize for showing feeling. When you do so, you apologize for truth."
    ],
    [
        "author" => "Ovid",
        "quote" => "Take rest; a field that has rested gives a bountiful crop."
    ],
    [
        "author" => "Anais Nin",
        "quote" => "Age does not protect you from love. But love, to some extent, protects you from age."
    ],
    [
        "author" => "Forrest Church",
        "quote" => "Do what you can. Want what you have. Be who you are."
    ],
    [
        "author" => "Coco Chanel",
        "quote" => "There are people who have money and people who are rich."
    ],
    [
        "author" => "Unknown",
        "quote" => "Why worry about tomorrow, when today is all we have?"
    ],
    [
        "author" => "Ambrose Bierce",
        "quote" => "Speak when you are angry and you will make the best speech you will ever regret."
    ],
    [
        "author" => "Henry Thoreau",
        "quote" => "Things do not change, we change."
    ],
    [
        "author" => "Mark Twain",
        "quote" => "The exercise of an extraordinary gift is the supremest pleasure in life."
    ],
    [
        "author" => "Etty Hillesum",
        "quote" => "Sometimes the most important thing in a whole day is the rest we take between two deep breaths."
    ],
    [
        "author" => "Mohandas Gandhi",
        "quote" => "Forgiveness is choosing to love. It is the first skill of self-giving love."
    ],
    [
        "author" => "William Londen",
        "quote" => "To ensure good health: eat lightly, breathe deeply, live moderately, cultivate cheerfulness, and maintain an interest in life."
    ],
    [
        "author" => "Unknown",
        "quote" => "Most smiles are started by another smile."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "Nothing is softer or more flexible than water, yet nothing can resist it."
    ],
    [
        "author" => "Dalai Lama",
        "quote" => "It is difficult to achieve a spirit of genuine cooperation as long as people remain indifferent to the feelings and happiness of others."
    ],
    [
        "author" => "Benjamin Franklin",
        "quote" => "Experience keeps a dear school, but fools will learn in no other."
    ],
    [
        "author" => "Thornton Wilder",
        "quote" => "We can only be said to be alive in those moments when our hearts are conscious of our treasures."
    ],
    [
        "author" => "Confucius",
        "quote" => "Fine words and an insinuating appearance are seldom associated with true virtue"
    ],
    [
        "author" => "Oliver Holmes",
        "quote" => "We do not quit playing because we grow old, we grow old because we quit playing."
    ],
    [
        "author" => "Wayne Dyer",
        "quote" => "You can't choose up sides on a round world."
    ],
    [
        "author" => "Mark Twain",
        "quote" => "Kindness is the language which the deaf can hear and the blind can see."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "I may not know everything, but everything is not known yet anyway."
    ],
    [
        "author" => "Buddha",
        "quote" => "If we could see the miracle of a single flower clearly, our whole life would change."
    ],
    [
        "author" => "Carl Jung",
        "quote" => "Without this playing with fantasy no creative work has ever yet come to birth. The debt we owe to the play of the imagination is incalculable."
    ],
    [
        "author" => "Buddha",
        "quote" => "You cannot travel the path until you have become the path itself."
    ],
    [
        "author" => "Theodore Roosevelt",
        "quote" => "Keep your eyes on the stars and your feet on the ground."
    ],
    [
        "author" => "William White",
        "quote" => "I am not afraid of tomorrow, for I have seen yesterday and I love today."
    ],
    [
        "author" => "Jamie Paolinetti",
        "quote" => "Limitations live only in our minds. But if we use our imaginations, our possibilities become limitless."
    ],
    [
        "author" => "Unknown",
        "quote" => "When you lose, don't lose the lesson."
    ],
    [
        "author" => "Napoleon Bonaparte",
        "quote" => "If you want a thing done well, do it yourself."
    ],
    [
        "author" => "Eriksson",
        "quote" => "The greatest barrier to success is the fear of failure."
    ],
    [
        "author" => "John Ruskin",
        "quote" => "Sunshine is delicious, rain is refreshing, wind braces us up, snow is exhilarating; there is really no such thing as bad weather, only different kinds of good weather."
    ],
    [
        "author" => "Joe Namath",
        "quote" => "If you aren't going all the way, why go at all?"
    ],
    [
        "author" => "Confucius",
        "quote" => "Our greatest glory is not in never falling, but in rising every time we fall."
    ],
    [
        "author" => "Pierre Abelard",
        "quote" => "The beginning of wisdom is found in doubting; by doubting we come to the question, and by seeking we may come upon the truth."
    ],
    [
        "author" => "Unknown",
        "quote" => "If I could reach up and hold a star for every time you've made me smile, the entire evening sky would be in the palm of my hand."
    ],
    [
        "author" => "Buddha",
        "quote" => "We are shaped by our thoughts; we become what we think. When the mind is pure, joy follows like a shadow that never leaves."
    ],
    [
        "author" => "Tony Robbins",
        "quote" => "Stay committed to your decisions, but stay flexible in your approach."
    ],
    [
        "author" => "Albert Schweitzer",
        "quote" => "An optimist is a person who sees a green light everywhere, while the pessimist sees only the red spotlight... The truly wise person is colour-blind."
    ],
    [
        "author" => "Donald Trump",
        "quote" => "What separates the winners from the losers is how a person reacts to each new twist of fate."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "Each man has his own vocation; his talent is his call. There is one direction in which all space is open to him."
    ],
    [
        "author" => "Dhammapada",
        "quote" => "Just as a flower, which seems beautiful has color but no perfume, so are the fruitless words of a man who speaks them but does them not."
    ],
    [
        "author" => "William James",
        "quote" => "To change ones life, start immediately, do it flamboyantly, no exceptions."
    ],
    [
        "author" => "John F. Kennedy",
        "quote" => "As we express our gratitude, we must never forget that the highest appreciation is not to utter words, but to live by them."
    ],
    [
        "author" => "Booker Washington",
        "quote" => "The world cares very little about what a man or woman knows; it is what a man or woman is able to do that counts."
    ],
    [
        "author" => "Unknown",
        "quote" => "The steeper the mountain the harder the climb the better the view from the finishing line"
    ],
    [
        "author" => "Dr. David M. Burns",
        "quote" => "Aim for success, not perfection. Never give up your right to be wrong, because then you will lose the ability to learn new things and move forward with your life."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "When I let go of what I am, I become what I might be."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "Transformation does not start with some one else changing you; transformation is an inner self reworking of what you are now to what you will be."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "Time is not a measure the length of a day or month or year but more a measure of what you have accomplished."
    ],
    [
        "author" => "Johann Wolfgang von Goethe",
        "quote" => "Wherever a man may happen to turn, whatever a man may undertake, he will always end up by returning to the path which nature has marked out for him."
    ],
    [
        "author" => "Buddha",
        "quote" => "Holding on to anger is like grasping a hot coal with the intent of throwing it at someone else; you are the one who gets burned."
    ],
    [
        "author" => "African proverb",
        "quote" => "When there is no enemy within, the enemies outside cannot hurt you."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "He who controls others may be powerful, but he who has mastered himself is mightier still."
    ],
    [
        "author" => "Wayne Dyer",
        "quote" => "There is no scarcity of opportunity to make a living at what you love; theres only scarcity of resolve to make it happen."
    ],
    [
        "author" => "Wolfgang Amadeus Mozart",
        "quote" => "Neither a lofty degree of intelligence nor imagination nor both together go to the making of genius. Love, love, love, that is the soul of genius."
    ],
    [
        "author" => "H. Bertram Lewis",
        "quote" => "The happy and efficient people in this world are those who accept trouble as a normal detail of human life and resolve to capitalize it when it comes along."
    ],
    [
        "author" => "Saul Alinsky",
        "quote" => "As an organizer I start from where the world is, as it is, not as I would like it to be."
    ],
    [
        "author" => "Zig Ziglar",
        "quote" => "You are the only person on Earth who can use your ability."
    ],
    [
        "author" => "Unknown",
        "quote" => "Don't let what you can't do stop you from doing what you can do."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "Complaining doesn't change a thing only taking action does."
    ],
    [
        "author" => "Charles A. Lindbergh",
        "quote" => "Life a culmination of the past, an awareness of the present, an indication of the future beyond knowledge, the quality that gives a touch of divinity to matter."
    ],
    [
        "author" => "Robert Brault",
        "quote" => "Enjoy the little things, for one day you may look back and realize they were the big things."
    ],
    [
        "author" => "Oprah Winfrey",
        "quote" => "With every experience, you alone are painting your own canvas, thought by thought, choice by choice."
    ],
    [
        "author" => "Rumi",
        "quote" => "Let the beauty of what you love be what you do."
    ],
    [
        "author" => "Epictetus",
        "quote" => "The world turns aside to let any man pass who knows where he is going."
    ],
    [
        "author" => "Kahlil Gibran",
        "quote" => "Beauty is not in the face; beauty is a light in the heart."
    ],
    [
        "author" => "John Lubbock",
        "quote" => "A day of worry is more exhausting than a day of work."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "Truth, and goodness, and beauty are but different faces of the same all."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "To be great is to be misunderstood."
    ],
    [
        "author" => "Alfred Adler",
        "quote" => "Trust only movement. Life happens at the level of events, not of words. Trust movement."
    ],
    [
        "author" => "Winston Churchill",
        "quote" => "Never, never, never give up."
    ],
    [
        "author" => "Andre Gide",
        "quote" => "The most decisive actions of our life... are most often unconsidered actions."
    ],
    [
        "author" => "Robert Schuller",
        "quote" => "As we grow as unique persons, we learn to respect the uniqueness of others."
    ],
    [
        "author" => "Robert Schuller",
        "quote" => "Failure doesn't mean you are a failure it just means you haven't succeeded yet."
    ],
    [
        "author" => "Mahatma Gandhi",
        "quote" => "It is the quality of our work which will please God, not the quantity."
    ],
    [
        "author" => "Stephen Kaggwa",
        "quote" => "Try and fail, but don't fail to try."
    ],
    [
        "author" => "Epictetus",
        "quote" => "First say to yourself what you would be; and then do what you have to do."
    ],
    [
        "author" => "Carl Jung",
        "quote" => "Through pride we are ever deceiving ourselves. But deep down below the surface of the average conscience a still, small voice says to us, Something is out of tune."
    ],
    [
        "author" => "Epictetus",
        "quote" => "Keep silence for the most part, and speak only when you must, and then briefly."
    ],
    [
        "author" => "Percy Shelley",
        "quote" => "Fear not for the future, weep not for the past."
    ],
    [
        "author" => "Wayne Dyer",
        "quote" => "We are Divine enough to ask and we are important enough to receive."
    ],
    [
        "author" => "Korean proverb",
        "quote" => "If you kick a stone in anger, you'll hurt your own foot."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "To see things in the seed, that is genius."
    ],
    [
        "author" => "Bertrand Russell",
        "quote" => "The happiness that is genuinely satisfying is accompanied by the fullest exercise of our faculties and the fullest realization of the world in which we live."
    ],
    [
        "author" => "Douglas Adams",
        "quote" => "Human beings, who are almost unique in having the ability to learn from the experience of others, are also remarkable for their apparent disinclination to do so."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "Make the most of yourself, for that is all there is of you."
    ],
    [
        "author" => "Muriel Rukeyser",
        "quote" => "The universe is made of stories, not atoms."
    ],
    [
        "author" => "Frank Wright",
        "quote" => "Respect should be earned by actions, and not acquired by years."
    ],
    [
        "author" => "Confucius",
        "quote" => "I hear and I forget. I see and I remember. I do and I understand."
    ],
    [
        "author" => "Will Durant",
        "quote" => "The trouble with most people is that they think with their hopes or fears or wishes rather than with their minds."
    ],
    [
        "author" => "Chuck Norris",
        "quote" => "A lot of people give up just before theyre about to make it. You know you never know when that next obstacle is going to be the last one."
    ],
    [
        "author" => "Lauren Raffo",
        "quote" => "Sometimes the biggest act of courage is a small one."
    ],
    [
        "author" => "Tony Robbins",
        "quote" => "People are not lazy. They simply have impotent goals, that is, goals that do not inspire them."
    ],
    [
        "author" => "Eckhart Tolle",
        "quote" => "You do not become good by trying to be good, but by finding the goodness that is already within you."
    ],
    [
        "author" => "Marcus Aurelius",
        "quote" => "Waste no more time arguing about what a good man should be. Be one."
    ],
    [
        "author" => "John Barrymore",
        "quote" => "Happiness often sneaks in through a door you didn't know you left open."
    ],
    [
        "author" => "Mark Twain",
        "quote" => "There are basically two types of people. People who accomplish things, and people who claim to have accomplished things. The first group is less crowded."
    ],
    [
        "author" => "Winifred Holtby",
        "quote" => "The things that one most wants to do are the things that are probably most worth doing."
    ],
    [
        "author" => "Abraham Lincoln",
        "quote" => "Always bear in mind that your own resolution to succeed is more important than any one thing."
    ],
    [
        "author" => "Albert Einstein",
        "quote" => "Setting an example is not the main means of influencing another, it is the only means."
    ],
    [
        "author" => "Richard Garriott",
        "quote" => "Chaos and Order are not enemies, only opposites."
    ],
    [
        "author" => "Henry Longfellow",
        "quote" => "Perseverance is a great element of success. If you only knock long enough and loud enough at the gate, you are sure to wake up somebody."
    ],
    [
        "author" => "Harriet Lerner",
        "quote" => "Only through our connectedness to others can we really know and enhance the self. And only through working on the self can we begin to enhance our connectedness to others."
    ],
    [
        "author" => "Chinese proverb",
        "quote" => "He who deliberates fully before taking a step will spend his entire life on one leg."
    ],
    [
        "author" => "Mother Teresa",
        "quote" => "Peace begins with a smile."
    ],
    [
        "author" => "Doug Horton",
        "quote" => "Be your own hero, it's cheaper than a movie ticket."
    ],
    [
        "author" => "Maori proverb",
        "quote" => "Turn your face toward the sun and the shadows will fall behind you."
    ],
    [
        "author" => "Jack Buck",
        "quote" => "Things turn out best for those who make the best of the way things turn out."
    ],
    [
        "author" => "Whoopi Goldberg",
        "quote" => "Were here for a reason. I believe a bit of the reason is to throw little torches out to lead people through the dark."
    ],
    [
        "author" => "Anthony Robbins",
        "quote" => "To effectively communicate, we must realize that we are all different in the way we perceive the world and use this understanding as a guide to our communication with others."
    ],
    [
        "author" => "Confucius",
        "quote" => "Ability will never catch up with the demand for it."
    ],
    [
        "author" => "Albert Schweitzer",
        "quote" => "Never say there is nothing beautiful in the world any more. There is always something to make you wonder in the shape of a tree, the trembling of a leaf."
    ],
    [
        "author" => "Henry Reed",
        "quote" => "Intuition is the very force or activity of the soul in its experience through whatever has been the experience of the soul itself."
    ],
    [
        "author" => "Tony Robbins",
        "quote" => "Setting goals is the first step in turning the invisible into the visible."
    ],
    [
        "author" => "Pat Riley",
        "quote" => "Courage is not the absence of fear, but simply moving on with dignity despite that fear."
    ],
    [
        "author" => "Galileo Galilei",
        "quote" => "All truths are easy to understand once they are discovered; the point is to discover them."
    ],
    [
        "author" => "Oscar Wilde",
        "quote" => "The smallest act of kindness is worth more than the grandest intention."
    ],
    [
        "author" => "Margaret Wheatley",
        "quote" => "We know from science that nothing in the universe exists as an isolated or independent entity."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "Everything in the universe goes by indirection. There are no straight lines."
    ],
    [
        "author" => "George Eliot",
        "quote" => "What do we live for, if it is not to make life less difficult for each other?"
    ],
    [
        "author" => "Tenzin Gyatso",
        "quote" => "When we feel love and kindness toward others, it not only makes others feel loved and cared for, but it helps us also to develop inner happiness and peace."
    ],
    [
        "author" => "Maya Angelou",
        "quote" => "We may encounter many defeats but we must not be defeated."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "Every person, all the events of your life are there because you have drawn them there. What you choose to do with them is up to you."
    ],
    [
        "author" => "Albert Einstein",
        "quote" => "Logic will get you from A to B. Imagination will take you everywhere."
    ],
    [
        "author" => "Sarah Breathnach",
        "quote" => "Our deepest wishes are whispers of our authentic selves. We must learn to respect them. We must learn to listen."
    ],
    [
        "author" => "Henry Thoreau",
        "quote" => "The world is but a canvas to the imagination."
    ],
    [
        "author" => "Lisa Alther",
        "quote" => "Thats the risk you take if you change: that people you've been involved with won't like the new you. But other people who do will come along."
    ],
    [
        "author" => "Walter Benjamin",
        "quote" => "To be happy is to be able to become aware of oneself without fright."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "Strength to carry on despite the odds means you have faith in your own abilities and know how."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "Make the most of yourself for that is all there is of you."
    ],
    [
        "author" => "Lama Yeshe",
        "quote" => "Be gentle first with yourself if you wish to be gentle with others."
    ],
    [
        "author" => "Cardinal Retz",
        "quote" => "A man who doesn't trust himself can never really trust anyone else."
    ],
    [
        "author" => "Benjamin Disraeli",
        "quote" => "We make our own fortunes and we call them fate."
    ],
    [
        "author" => "Vince Lombardi",
        "quote" => "Leaders aren't born they are made. And they are made just like anything else, through hard work. And that's the price well have to pay to achieve that goal, or any goal."
    ],
    [
        "author" => "E. E. Cummings",
        "quote" => "It takes courage to grow up and become who you really are."
    ],
    [
        "author" => "Og Mandino",
        "quote" => "Always seek out the seed of triumph in every adversity."
    ],
    [
        "author" => "Catherine Pulsifer",
        "quote" => "Rather than wishing for change, you first must be prepared to change."
    ],
    [
        "author" => "Buddha",
        "quote" => "I do not believe in a fate that falls on men however they act; but I do believe in a fate that falls on them unless they act."
    ],
    [
        "author" => "Holmes",
        "quote" => "Fame usually comes to those who are thinking about something else."
    ],
    [
        "author" => "Napoleon Hill",
        "quote" => "First comes thought; then organization of that thought, into ideas and plans; then transformation of those plans into reality. The beginning, as you will observe, is in your imagination."
    ],
    [
        "author" => "Confucius",
        "quote" => "The superior man acts before he speaks, and afterwards speaks according to his action."
    ],
    [
        "author" => "Chinese proverb",
        "quote" => "A single conversation across the table with a wise person is worth a months study of books."
    ],
    [
        "author" => "Mohandas Gandhi",
        "quote" => "The difference between what we do and what we are capable of doing would suffice to solve most of the worlds problems."
    ],
    [
        "author" => "Unknown",
        "quote" => "You can never cross the ocean unless you have the courage to lose sight of the shore."
    ],
    [
        "author" => "Vaclav Havel",
        "quote" => "Work for something because it is good, not just because it stands a chance to succeed."
    ],
    [
        "author" => "Carl Jung",
        "quote" => "Knowledge rests not upon truth alone, but upon error also."
    ],
    [
        "author" => "Katherine Mansfield",
        "quote" => "Make it a rule of life never to regret and never to look back. Regret is an appalling waste of energy; you can't build on it; it's only for wallowing in."
    ],
    [
        "author" => "Victoria Holt",
        "quote" => "Never regret. If it's good, it's wonderful. If it's bad, it's experience."
    ],
    [
        "author" => "Chuang Tzu",
        "quote" => "When deeds and words are in accord, the whole world is transformed."
    ],
    [
        "author" => "Mother Teresa",
        "quote" => "Kind words can be short and easy to speak but their echoes are truly endless."
    ],
    [
        "author" => "William Blake",
        "quote" => "For everything that lives is holy, life delights in life."
    ],
    [
        "author" => "Dalai Lama",
        "quote" => "The most important thing is transforming our minds, for a new way of thinking, a new outlook: we should strive to develop a new inner world."
    ],
    [
        "author" => "Billie Armstrong",
        "quote" => "Our passion is our strength."
    ],
    [
        "author" => "Leonardo da Vinci",
        "quote" => "In rivers, the water that you touch is the last of what has passed and the first of that which comes; so with present time."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "Spring is a time for rebirth and the fulfilment of new life."
    ],
    [
        "author" => "Marcus Aurelius",
        "quote" => "There is nothing happens to any person but what was in his power to go through with."
    ],
    [
        "author" => "Alfred Korzybski",
        "quote" => "There are two ways to slide easily through life: to believe everything or to doubt everything; both ways save us from thinking."
    ],
    [
        "author" => "Alfred Whitehead",
        "quote" => "The art of progress is to preserve order amid change, and to preserve change amid order."
    ],
    [
        "author" => "Winston Churchill",
        "quote" => "We make a living by what we get, but we make a life by what we give."
    ],
    [
        "author" => "Friedrich von Schiller",
        "quote" => "If you want to study yourself, look into the hearts of other people. If you want to study other people, look into your own heart."
    ],
    [
        "author" => "Wayne Dyer",
        "quote" => "Maxim for life: You get treated in life the way you teach people to treat you."
    ],
    [
        "author" => "Charlotte Perkins Gilman",
        "quote" => "The first duty of a human being is to assume the right functional relationship to society, more briefly, to find your real job, and do it."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "The key to growth is the introduction of higher dimensions of consciousness into our awareness."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "Thought is the blossom; language the bud; action the fruit behind it."
    ],
    [
        "author" => "Daisaku Ikeda",
        "quote" => "True happiness means forging a strong spirit that is undefeated, no matter how trying our circumstances."
    ],
    [
        "author" => "Peter Drucker",
        "quote" => "There is nothing so useless as doing efficiently that which should not be done at all."
    ],
    [
        "author" => "Leonardo da Vinci",
        "quote" => "I have been impressed with the urgency of doing. Knowing is not enough; we must apply. Being willing is not enough; we must do."
    ],
    [
        "author" => "William Shakespeare",
        "quote" => "All the world is a stage, And all the men and women merely players.They have their exits and entrances; Each man in his time plays many parts."
    ],
    [
        "author" => "Nelson Mandela",
        "quote" => "As we are liberated from our own fear, our presence automatically liberates others."
    ],
    [
        "author" => "James Yorke",
        "quote" => "The most successful people are those who are good at plan B."
    ],
    [
        "author" => "Aristotle",
        "quote" => "Criticism is something you can easily avoid by saying nothing, doing nothing, and being nothing."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "To fly as fast as thought, you must begin by knowing that you have already arrived."
    ],
    [
        "author" => "Hannah More",
        "quote" => "Obstacles are those things you see when you take your eyes off the goal."
    ],
    [
        "author" => "Michelangelo",
        "quote" => "The greatest danger for most of us is not that our aim is too high and we miss it, but that it is too low and we reach it."
    ],
    [
        "author" => "Albert Einstein",
        "quote" => "Great ideas often receive violent opposition from mediocre minds."
    ],
    [
        "author" => "Tony Robbins",
        "quote" => "We can change our lives. We can do, have, and be exactly what we wish."
    ],
    [
        "author" => "Zig Ziglar",
        "quote" => "You are the only person on earth who can use your ability."
    ],
    [
        "author" => "Jean Lacordaire",
        "quote" => "Neither genius, fame, nor love show the greatness of the soul. Only kindness can do that."
    ],
    [
        "author" => "Carl Jung",
        "quote" => "The least of things with a meaning is worth more in life than the greatest of things without it."
    ],
    [
        "author" => "Isocrates",
        "quote" => "The noblest worship is to make yourself as good and as just as you can."
    ],
    [
        "author" => "Carl Bard",
        "quote" => "Though no one can go back and make a brand new start, anyone can start from not and make a brand new ending."
    ],
    [
        "author" => "Denis Waitley",
        "quote" => "A dream is your creative vision for your life in the future. You must break out of your current comfort zone and become comfortable with the unfamiliar and the unknown."
    ],
    [
        "author" => "Robert Orben",
        "quote" => "Don't think of it as failure. Think of it as time-released success."
    ],
    [
        "author" => "Aristotle",
        "quote" => "We are what we repeatedly do. Excellence, then, is not an act but a habit."
    ],
    [
        "author" => "Abraham Lincoln",
        "quote" => "I walk slowly, but I never walk backward."
    ],
    [
        "author" => "Rene Descartes",
        "quote" => "Divide each difficulty into as many parts as is feasible and necessary to resolve it."
    ],
    [
        "author" => "Unknown",
        "quote" => "The best place to find a helping hand is at the end of your own arm."
    ],
    [
        "author" => "Blaise Pascal",
        "quote" => "We know the truth, not only by the reason, but by the heart."
    ],
    [
        "author" => "Kahlil Gibran",
        "quote" => "We choose our joys and sorrows long before we experience them."
    ],
    [
        "author" => "Oscar Wilde",
        "quote" => "Anybody can make history. Only a great man can write it."
    ],
    [
        "author" => "Hermann Hesse",
        "quote" => "If I know what love is, it is because of you."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "Allow the world to live as it chooses, and allow yourself to live as you choose."
    ],
    [
        "author" => "Barack Obama",
        "quote" => "Focusing your life solely on making a buck shows a poverty of ambition. It asks too little of yourself. And it will leave you unfulfilled."
    ],
    [
        "author" => "Dalai Lama",
        "quote" => "Compassion and happiness are not a sign of weakness but a sign of strength."
    ],
    [
        "author" => "Franklin D. Roosevelt",
        "quote" => "It is common sense to take a method and try it. If it fails, admit it frankly and try another. But above all, try something."
    ],
    [
        "author" => "David Bader",
        "quote" => "Be here now. Be someplace else later. Is that so complicated?"
    ],
    [
        "author" => "Mahummad Ali",
        "quote" => "To be able to give away riches is mandatory if you wish to possess them. This is the only way that you will be truly rich."
    ],
    [
        "author" => "Confucius",
        "quote" => "Learning without reflection is a waste, reflection without learning is dangerous."
    ],
    [
        "author" => "Unknown",
        "quote" => "Don't fear failure so much that you refuse to try new things. The saddest summary of life contains three descriptions: could have, might have, and should have."
    ],
    [
        "author" => "Bruce Lee",
        "quote" => "All fixed set patterns are incapable of adaptability or pliability. The truth is outside of all fixed patterns."
    ],
    [
        "author" => "Oprah Winfrey",
        "quote" => "I don't believe in failure. It's not failure if you enjoyed the process."
    ],
    [
        "author" => "Helen Keller",
        "quote" => "The best and most beautiful things in the world cannot be seen, nor touched... but are felt in the heart."
    ],
    [
        "author" => "David Rockefeller",
        "quote" => "Success in business requires training and discipline and hard work. But if you're not frightened by these things, the opportunities are just as great today as they ever were."
    ],
    [
        "author" => "Cavour",
        "quote" => "The man who trusts men will make fewer mistakes than he who distrusts them."
    ],
    [
        "author" => "Bruce Lee",
        "quote" => "The less effort, the faster and more powerful you will be."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "We must be as courteous to a man as we are to a picture, which we are willing to give the advantage of a good light."
    ],
    [
        "author" => "Anais Nin",
        "quote" => "The dream was always running ahead of me. To catch up, to live for a moment in unison with it, that was the miracle."
    ],
    [
        "author" => "Ellen Parr",
        "quote" => "The cure for boredom is curiosity. There is no cure for curiosity."
    ],
    [
        "author" => "Mother Teresa",
        "quote" => "We can do no great things, only small things with great love."
    ],
    [
        "author" => "Kahlil Gibran",
        "quote" => "Be like the flower, turn your face to the sun."
    ],
    [
        "author" => "Buddha",
        "quote" => "Remembering a wrong is like carrying a burden on the mind."
    ],
    [
        "author" => "James Openheim",
        "quote" => "The foolish man seeks happiness in the distance; the wise grows it under his feet."
    ],
    [
        "author" => "Henry Beecher",
        "quote" => "Gratitude is the fairest blossom which springs from the soul."
    ],
    [
        "author" => "Confucius",
        "quote" => "If you look into your own heart, and you find nothing wrong there, what is there to worry about? What is there to fear?"
    ],
    [
        "author" => "John Acosta",
        "quote" => "You cannot have what you do not want."
    ],
    [
        "author" => "Ralph Waldo Emerson",
        "quote" => "Do not follow where the path may lead. Go, instead, where there is no path and leave a trail."
    ],
    [
        "author" => "Eleanor Roosevelt",
        "quote" => "It is not fair to ask of others what you are unwilling to do yourself."
    ],
    [
        "author" => "Carl Jung",
        "quote" => "Knowing your own darkness is the best method for dealing with the darknesses of other people."
    ],
    [
        "author" => "Moncure Conway",
        "quote" => "The best thing in every noble dream is the dreamer..."
    ],
    [
        "author" => "Walt Disney",
        "quote" => "Weve got to have a dream if we are going to make a dream come true."
    ],
    [
        "author" => "Norman Peale",
        "quote" => "If you want things to be different, perhaps the answer is to become different yourself."
    ],
    [
        "author" => "Alexander the Great",
        "quote" => "There is nothing impossible to him who will try."
    ],
    [
        "author" => "Theodore Rubin",
        "quote" => "Kindness is more important than wisdom, and the recognition of this is the beginning of wisdom."
    ],
    [
        "author" => "Harriet Tubman",
        "quote" => "Every great dream begins with a dreamer. Always remember, you have within you the strength, the patience, and the passion to reach for the stars to change the world."
    ],
    [
        "author" => "Buddha",
        "quote" => "The only real failure in life is not to be true to the best one knows."
    ],
    [
        "author" => "Albert Einstein",
        "quote" => "Anyone who doesn't take truth seriously in small matters cannot be trusted in large ones either."
    ],
    [
        "author" => "Barack Obama",
        "quote" => "Change will not come if we wait for some other person or some other time. We are the ones weve been waiting for. We are the change that we seek."
    ],
    [
        "author" => "George Santayan",
        "quote" => "Those who cannot learn from history are doomed to repeat it."
    ],
    [
        "author" => "Carlos Castaneda",
        "quote" => "The trick is in what one emphasizes. We either make ourselves miserable, or we make ourselves happy. The amount of work is the same."
    ],
    [
        "author" => "Seneca",
        "quote" => "Things that were hard to bear are sweet to remember."
    ],
    [
        "author" => "Henry James",
        "quote" => "Three things in human life are important. The first is to be kind. The second is to be kind. The third is to be kind."
    ],
    [
        "author" => "Buddha",
        "quote" => "However many holy words you read, However many you speak, What good will they do you If you do not act on upon them?"
    ],
    [
        "author" => "Virgil",
        "quote" => "They can conquer who believe they can."
    ],
    [
        "author" => "Frank Tyger",
        "quote" => "Learn to listen. Opportunity could be knocking at your door very softly."
    ],
    [
        "author" => "Sai Baba",
        "quote" => "All action results from thought, so it is thoughts that matter."
    ],
    [
        "author" => "Albert Einstein",
        "quote" => "There are only two ways to live your life. One is as though nothing is a miracle. The other is as though everything is a miracle."
    ],
    [
        "author" => "Colette",
        "quote" => "I love my past. I love my present. Im not ashamed of what Ive had, and Im not sad because I have it no longer."
    ],
    [
        "author" => "Maya Angelou",
        "quote" => "Prejudice is a burden that confuses the past, threatens the future and renders the present inaccessible."
    ],
    [
        "author" => "William Hazlitt",
        "quote" => "Just as much as we see in others we have in ourselves."
    ],
    [
        "author" => "Geoffrey F. Abert",
        "quote" => "Prosperity depends more on wanting what you have than having what you want."
    ],
    [
        "author" => "Coco Chanel",
        "quote" => "How many cares one loses when one decides not to be something but to be someone."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "He who knows, does not speak. He who speaks, does not know."
    ],
    [
        "author" => "Unknown",
        "quote" => "We cannot direct the wind but we can adjust the sails."
    ],
    [
        "author" => "Albert Einstein",
        "quote" => "One may say the eternal mystery of the world is its comprehensibility."
    ],
    [
        "author" => "John Dewey",
        "quote" => "The self is not something ready-made, but something in continuous formation through choice of action."
    ],
    [
        "author" => "Mahatma Gandhi",
        "quote" => "Our greatness lies not so much in being able to remake the world as being able to remake ourselves."
    ],
    [
        "author" => "Philip Breedveld",
        "quote" => "Moments of complete apathy are the best for new creations."
    ],
    [
        "author" => "John Powell",
        "quote" => "The only real mistake is the one from which we learn nothing."
    ],
    [
        "author" => "Tim Menchen",
        "quote" => "To dream of the person you would like to be is to waste the person you are."
    ],
    [
        "author" => "Charles Dubois",
        "quote" => "The important thing is this: to be able at any moment to sacrifice what we are for what we could become."
    ],
    [
        "author" => "Cicero",
        "quote" => "Gratitude is not only the greatest of virtues, but the paren't of all the others."
    ],
    [
        "author" => "Lama Yeshe",
        "quote" => "It is never too late. Even if you are going to die tomorrow, keep yourself straight and clear and be a happy human being today."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "Respect is not something that you can ask for, buy or borrow. Respect is what you earn from each person no matter their background or status."
    ],
    [
        "author" => "Henry Thoreau",
        "quote" => "Things do not change; we change."
    ],
    [
        "author" => "Blaise Pascal",
        "quote" => "We must learn our limits. We are all something, but none of us are everything."
    ],
    [
        "author" => "Stephen Sigmund",
        "quote" => "Learn wisdom from the ways of a seedling. A seedling which is never hardened off through stressful situations will never become a strong productive plant."
    ],
    [
        "author" => "Charles R. Swindoll",
        "quote" => "We are all faced with a series of great opportunities brilliantly disguised as impossible situations."
    ],
    [
        "author" => "Albert Camus",
        "quote" => "All men have a sweetness in their life. That is what helps them go on. It is towards that they turn when they feel too worn out."
    ],
    [
        "author" => "Frank Tyger",
        "quote" => "Be a good listener. Your ears will never get you in trouble."
    ],
    [
        "author" => "Buddha",
        "quote" => "Meditation brings wisdom; lack of mediation leaves ignorance. Know well what leads you forward and what hold you back, and choose the path that leads to wisdom."
    ],
    [
        "author" => "Anatole France",
        "quote" => "You learn to speak by speaking, to study by studying, to run by running, to work by working; in just the same way, you learn to love by loving."
    ],
    [
        "author" => "John Marshall",
        "quote" => "To listen well is as powerful a means of communication and influence as to talk well."
    ],
    [
        "author" => "George Sand",
        "quote" => "There is only one happiness in life, to love and be loved."
    ],
    [
        "author" => "Matt Zotti",
        "quote" => "Live through feeling and you will live through love. For feeling is the language of the soul, and feeling is truth."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "Kindness in words creates confidence. Kindness in thinking creates profoundness. Kindness in giving creates love."
    ],
    [
        "author" => "Thomas Jefferson",
        "quote" => "Reason and free inquiry are the only effectual agents against error."
    ],
    [
        "author" => "Napoleon Bonaparte",
        "quote" => "The best cure for the body is a quiet mind."
    ],
    [
        "author" => "Dalai Lama",
        "quote" => "See the positive side, the potential, and make an effort."
    ],
    [
        "author" => "Jane Roberts",
        "quote" => "By accepting yourself and being fully what you are, your presence can make others happy."
    ],
    [
        "author" => "Norman Cousins",
        "quote" => "Never deny a diagnosis, but do deny the negative verdict that may go with it."
    ],
    [
        "author" => "Johann Wolfgang von Goethe",
        "quote" => "The really unhappy person is the one who leaves undone what they can do, and starts doing what they don't understand; no wonder they come to grief."
    ],
    [
        "author" => "Wayne Dyer",
        "quote" => "You cannot be lonely if you like the person you're alone with."
    ],
    [
        "author" => "G. K. Chesterton",
        "quote" => "I do not believe in a fate that falls on men however they act; but I do believe in a fate that falls on man unless they act."
    ],
    [
        "author" => "Buddha",
        "quote" => "If you propose to speak, always ask yourself, is it true, is it necessary, is it kind."
    ],
    [
        "author" => "Cadet Maxim",
        "quote" => "Risk more than others think is safe. Care more than others think is wise. Dream more than others think is practical.Expect more than others think is possible."
    ],
    [
        "author" => "Og Mandino",
        "quote" => "Failure will never overtake me if my determination to succeed is strong enough."
    ],
    [
        "author" => "Ralph Marston",
        "quote" => "Let go of your attachment to being right, and suddenly your mind is more open. You're able to benefit from the unique viewpoints of others, without being crippled by your own judgement."
    ],
    [
        "author" => "Mark Twain",
        "quote" => "Wrinkles should merely indicate where smiles have been."
    ],
    [
        "author" => "Zig Ziglar",
        "quote" => "Your attitude, not your aptitude, will determine your altitude."
    ],
    [
        "author" => "Rumi",
        "quote" => "Let yourself be silently drawn by the stronger pull of what you really love."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "I gave my life to become the person I am right now. Was it worth it?"
    ],
    [
        "author" => "Hausa",
        "quote" => "Give thanks for a little and you will find a lot."
    ],
    [
        "author" => "Arie de Gues",
        "quote" => "Your ability to learn faster than your competition is your only sustainable competitive advantage."
    ],
    [
        "author" => "Paul Boese",
        "quote" => "Forgiveness does not change the past, but it does enlarge the future."
    ],
    [
        "author" => "Nikola Tesla",
        "quote" => "Let the future tell the truth, and evaluate each one according to his work and accomplishments. The present is theirs; the future, for which I have really worked, is mine."
    ],
    [
        "author" => "Aristotle",
        "quote" => "Moral excellence comes about as a result of habit. We become just by doing just acts, temperate by doing temperate acts, brave by doing brave acts."
    ],
    [
        "author" => "William James",
        "quote" => "The deepest craving of human nature is the need to be appreciated."
    ],
    [
        "author" => "Antoine de Saint-Exupery",
        "quote" => "Love does not consist of gazing at each other, but in looking together in the same direction."
    ],
    [
        "author" => "Edwin Markham",
        "quote" => "We have committed the Golden Rule to memory; let us now commit it to life."
    ],
    [
        "author" => "Robert Southey",
        "quote" => "It is with words as with sunbeams. The more they are condensed, the deeper they burn."
    ],
    [
        "author" => "Tony Robbins",
        "quote" => "When people are like each other they tend to like each other."
    ],
    [
        "author" => "Confucius",
        "quote" => "Sincerity is the way of Heaven. The attainment of sincerity is the way of men."
    ],
    [
        "author" => "Mohandas Gandhi",
        "quote" => "Be the change that you want to see in the world."
    ],
    [
        "author" => "Jim Rohn",
        "quote" => "The more you care, the stronger you can be."
    ],
    [
        "author" => "Oprah Winfrey",
        "quote" => "Lots of people want to ride with you in the limo, but what you want is someone who will take the bus with you when the limo breaks down."
    ],
    [
        "author" => "Goethe",
        "quote" => "Just trust yourself, then you will know how to live."
    ],
    [
        "author" => "Pema Chodron",
        "quote" => "To be fully alive, fully human, and completely awake is to be continually thrown out of the nest."
    ],
    [
        "author" => "Jim Rohn",
        "quote" => "If you don't design your own life plan, chances are you'll fall into someone else's plan. And guess what they have planned for you? Not much."
    ],
    [
        "author" => "Carl Jung",
        "quote" => "It all depends on how we look at things, and not how they are in themselves."
    ],
    [
        "author" => "Unknown",
        "quote" => "Giving up doesn't always mean you are weak; sometimes it means that you are strong enough to let go."
    ],
    [
        "author" => "William Shakespeare",
        "quote" => "To climb steep hills requires a slow pace at first."
    ],
    [
        "author" => "Buddha",
        "quote" => "An idea that is developed and put into action is more important than an idea that exists only as an idea."
    ],
    [
        "author" => "Max Planck",
        "quote" => "It is not the possession of truth, but the success which attends the seeking after it, that enriches the seeker and brings happiness to him."
    ],
    [
        "author" => "Abraham Lincoln",
        "quote" => "Truth is generally the best vindication against slander."
    ],
    [
        "author" => "Anna Pavlova",
        "quote" => "To follow, without halt, one aim: There is the secret of success."
    ],
    [
        "author" => "Nelson Mandela",
        "quote" => "And as we let our own light shine, we unconsciously give other people permission to do the same."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "What is a weed? A plant whose virtues have not yet been discovered."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "Belief consists in accepting the affirmations of the soul; Unbelief, in denying them."
    ],
    [
        "author" => "Unknown",
        "quote" => "Many people have gone further than they thought they could because someone else thought they could."
    ],
    [
        "author" => "Rabindranath Tagore",
        "quote" => "We read the world wrong and say that it deceives us."
    ],
    [
        "author" => "Edith Wharton",
        "quote" => "If only wed stop trying to be happy wed have a pretty good time."
    ],
    [
        "author" => "Eleanor Roosevelt",
        "quote" => "You must do the things you think you cannot do."
    ],
    [
        "author" => "Oscar Wilde",
        "quote" => "Be yourself; everyone else is already taken."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "The mark of your ignorance is the depth of your belief in injustice and tragedy. What the caterpillar calls the end of the world, the Master calls the butterfly."
    ],
    [
        "author" => "Edna Millay",
        "quote" => "I am glad that I paid so little attention to good advice; had I abided by it I might have been saved from some of my most valuable mistakes."
    ],
    [
        "author" => "Abraham Lincoln",
        "quote" => "Most folks are as happy as they make up their minds to be."
    ],
    [
        "author" => "Oliver Holmes",
        "quote" => "Love is the master key that opens the gates of happiness."
    ],
    [
        "author" => "Cecil B. DeMille",
        "quote" => "The person who makes a success of living is the one who see his goal steadily and aims for it unswervingly. That is dedication."
    ],
    [
        "author" => "George Shaw",
        "quote" => "My reputation grows with every failure."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "Good thoughts are no better than good dreams, unless they be executed."
    ],
    [
        "author" => "Dalai Lama",
        "quote" => "Happiness does not come about only due to external circumstances; it mainly derives from inner attitudes."
    ],
    [
        "author" => "Buddha",
        "quote" => "However many holy words you read, however many you speak, what good will they do you if you do not act on upon them?"
    ],
    [
        "author" => "Harry Banks",
        "quote" => "For success, attitude is equally as important as ability."
    ],
    [
        "author" => "Colin Powell",
        "quote" => "If you are going to achieve excellence in big things, you develop the habit in little matters. Excellence is not an exception, it is a prevailing attitude."
    ],
    [
        "author" => "Albert Einstein",
        "quote" => "A person who never made a mistake never tried anything new."
    ],
    [
        "author" => "Buddha",
        "quote" => "Better than a thousand hollow words is one word that brings peace."
    ],
    [
        "author" => "George Bernard Shaw",
        "quote" => "The possibilities are numerous once we decide to act and not react."
    ],
    [
        "author" => "Henri Amiel",
        "quote" => "Almost everything comes from nothing."
    ],
    [
        "author" => "Donald Trump",
        "quote" => "Sometimes by losing a battle you find a new way to win the war."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "Listen to what you know instead of what you fear."
    ],
    [
        "author" => "Betty Friedan",
        "quote" => "It is easier to live through someone else than to become complete yourself."
    ],
    [
        "author" => "John Simone",
        "quote" => "If you're in a bad situation, don't worry it'll change. If you're in a good situation, don't worry it'll change."
    ],
    [
        "author" => "Zig Ziglar",
        "quote" => "Remember that failure is an event, not a person."
    ],
    [
        "author" => "Oprah Winfrey",
        "quote" => "Don't settle for a relationship that won't let you be yourself."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "What the caterpillar calls the end of the world, the master calls a butterfly."
    ],
    [
        "author" => "Thomas Carlyle",
        "quote" => "Instead of saying that man is the creature of circumstance, it would be nearer the mark to say that man is the architect of circumstance."
    ],
    [
        "author" => "Tony Robbins",
        "quote" => "If you do what you've always done, you'll get what youve always gotten."
    ],
    [
        "author" => "Mother Teresa",
        "quote" => "Do not wait for leaders; do it alone, person to person."
    ],
    [
        "author" => "Plotinus",
        "quote" => "Knowledge has three degrees, opinion, science, illumination. The means or instrument of the first is sense; of the second, dialectic; of the third, intuition."
    ],
    [
        "author" => "Mary Parrish",
        "quote" => "Love vanquishes time. To lovers, a moment can be eternity, eternity can be the tick of a clock."
    ],
    [
        "author" => "Voltaire",
        "quote" => "We never live; we are always in the expectation of living."
    ],
    [
        "author" => "Henri L. Bergson",
        "quote" => "Think like a man of action; act like a man of thought."
    ],
    [
        "author" => "Ziggy",
        "quote" => "You can complain because roses have thorns, or you can rejoice because thorns have roses."
    ],
    [
        "author" => "Anais Nin",
        "quote" => "There is not one big cosmic meaning for all, there is only the meaning we each give to our life."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "A leader is best when people barely know he exists, when his work is done, his aim fulfilled, they will say: we did it ourselves."
    ],
    [
        "author" => "John Lennon",
        "quote" => "Time you enjoyed wasting was not wasted."
    ],
    [
        "author" => "Albert Camus",
        "quote" => "You will never be happy if you continue to search for what happiness consists of. You will never live if you are looking for the meaning of life."
    ],
    [
        "author" => "Daisaku Ikeda",
        "quote" => "Genuine sincerity opens people's hearts, while manipulation causes them to close."
    ],
    [
        "author" => "Confucius",
        "quote" => "To give ones self earnestly to the duties due to men, and, while respecting spiritual beings, to keep aloof from them, may be called wisdom."
    ],
    [
        "author" => "Zadok Rabinowitz",
        "quote" => "A man's dreams are an index to his greatness."
    ],
    [
        "author" => "William Lyon Phelps",
        "quote" => "This is the final test of a gentleman: his respect for those who can be of no possible value to him."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "You teach best what you most need to learn."
    ],
    [
        "author" => "Winston Churchill",
        "quote" => "Continuous effort, not strength or intelligence, is the key to unlocking our potential."
    ],
    [
        "author" => "Henry Ford",
        "quote" => "Obstacles are those frightful things you see when you take your eyes off your goal."
    ],
    [
        "author" => "Wayne Dyer",
        "quote" => "Go for it now. The future is promised to no one."
    ],
    [
        "author" => "John Holmes",
        "quote" => "Never tell a young person that anything cannot be done. God may have been waiting centuries for someone ignorant enough of the impossible to do that very thing."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "Bold is not the act of foolishness but the attribute and inner strength to act when others will not so as to move forward not backward."
    ],
    [
        "author" => "Daisaku Ikeda",
        "quote" => "If we look at the world with a love of life, the world will reveal its beauty to us."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "In skating over thin ice our safety is in our speed."
    ],
    [
        "author" => "W. Clement Stone",
        "quote" => "When you discover your mission, you will feel its demand. It will fill you with enthusiasm and a burning desire to get to work on it."
    ],
    [
        "author" => "Publilius Syrus",
        "quote" => "Never promise more than you can perform."
    ],
    [
        "author" => "Nora Roberts",
        "quote" => "If you don't go after what you want, you'll never have it. If you don't ask, the answer is always no. If you don't step forward, you're always in the same place."
    ],
    [
        "author" => "Lou Holtz",
        "quote" => "I can't believe that God put us on this earth to be ordinary."
    ],
    [
        "author" => "Napoleon Hill",
        "quote" => "There are no limitations to the mind except those we acknowledge."
    ],
    [
        "author" => "Jules Poincare",
        "quote" => "It is through science that we prove, but through intuition that we discover."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "Don't be dismayed by good-byes. A farewell is necessary before you can meet again. And meeting again, after moments or lifetimes, is certain for those who are friends."
    ],
    [
        "author" => "Carla Gordon",
        "quote" => "If someone in your life talked to you the way you talk to yourself, you would have left them long ago."
    ],
    [
        "author" => "Edward Ericson",
        "quote" => "The cosmos is neither moral or immoral; only people are. He who would move the world must first move himself."
    ],
    [
        "author" => "Daisaku Ikeda",
        "quote" => "If you lose today, win tomorrow. In this never-ending spirit of challenge is the heart of a victor."
    ],
    [
        "author" => "Linda Hogan",
        "quote" => "There is a way that nature speaks, that land speaks. Most of the time we are simply not patient enough, quiet enough, to pay attention to the story."
    ],
    [
        "author" => "Georg Lichtenberg",
        "quote" => "I cannot say whether things will get better if we change; what I can say is they must change if they are to get better."
    ],
    [
        "author" => "Eckhart Tolle",
        "quote" => "The greater part of human pain is unnecessary. It is self-created as long as the unobserved mind runs your life."
    ],
    [
        "author" => "Alexander Pope",
        "quote" => "Blessed is the man who expects nothing, for he shall never be disappointed."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "He who knows others is wise. He who knows himself is enlightened."
    ],
    [
        "author" => "Peter Drucker",
        "quote" => "The best way to predict your future is to create it."
    ],
    [
        "author" => "May Sarton",
        "quote" => "A garden is always a series of losses set against a few triumphs, like life itself."
    ],
    [
        "author" => "Rachel Carson",
        "quote" => "If facts are the seeds that later produce knowledge and wisdom, then the emotions and the impressions of the senses are the fertile soil in which the seeds must grow."
    ],
    [
        "author" => "Ernest Hemingway",
        "quote" => "Never mistake motion for action."
    ],
    [
        "author" => "Hannah Senesh",
        "quote" => "One needs something to believe in, something for which one can have whole-hearted enthusiasm. One needs to feel that ones life has meaning, that one is needed in this world."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "One who is too insistent on his own views, finds few to agree with him."
    ],
    [
        "author" => "Harry Burchell Mathews",
        "quote" => "Translation is the paradigm, the exemplar of all writing. It is translation that demonstrates most vividly the yearning for transformation that underlies every act involving speech, that supremely human gift."
    ],
    [
        "author" => "Voltaire",
        "quote" => "Meditation is the dissolution of thoughts in eternal awareness or Pure consciousness without objectification, knowing without thinking, merging finitude in infinity."
    ],
    [
        "author" => "George Shaw",
        "quote" => "The reasonable man adapts himself to the world; the unreasonable man persists in trying to adapt the world to himself. Therefore, all progress depends on the unreasonable man."
    ],
    [
        "author" => "Michael Burke",
        "quote" => "Good instincts usually tell you what to do long before your head has figured it out."
    ],
    [
        "author" => "Pema Chodron",
        "quote" => "It isn't what happens to us that causes us to suffer; it's what we say to ourselves about what happens."
    ],
    [
        "author" => "Edgar Allan Poe",
        "quote" => "Those who dream by day are cognizant of many things which escape those who dream only by night."
    ],
    [
        "author" => "Ben Sweetland",
        "quote" => "We cannot hold a torch to light another's path without brightening our own."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "You are never given a wish without also being given the power to make it come true. You may have to work for it, however."
    ],
    [
        "author" => "Mother Teresa",
        "quote" => "Kind words can be short and easy to speak, but their echoes are truly endless."
    ],
    [
        "author" => "Unknown",
        "quote" => "Count your joys instead of your woes. Count your friends instead of your foes."
    ],
    [
        "author" => "John Updike",
        "quote" => "Dreams come true. Without that possibility, nature would not incite us to have them."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "Staying in one place is the best path to be taken over and surpassed by many."
    ],
    [
        "author" => "Carl Sagan",
        "quote" => "Imagination will often carry us to worlds that never were. But without it we go nowhere."
    ],
    [
        "author" => "Helen Keller",
        "quote" => "When one door of happiness closes, another opens; but often we look so long at the closed door that we do not see the one which has been opened for us."
    ],
    [
        "author" => "Jawaharlal Nehru",
        "quote" => "A leader or a man of action in a crisis almost always acts subconsciously and then thinks of the reasons for his action."
    ],
    [
        "author" => "Albert Einstein",
        "quote" => "I have no special talent. I am only passionately curious."
    ],
    [
        "author" => "Elizabeth Montagu",
        "quote" => "I endeavour to be wise when I cannot be merry, easy when I cannot be glad, content with what cannot be mended and patient when there is no redress."
    ],
    [
        "author" => "William Scolavino",
        "quote" => "The height of your accomplishments will equal the depth of your convictions."
    ],
    [
        "author" => "Rabbi Hillel",
        "quote" => "If I am not for myself, who will be for me? If I am not for others, what am I? And if not now, when?"
    ],
    [
        "author" => "Audre Lorde",
        "quote" => "When I dare to be powerful, to use my strength in the service of my vision, then it becomes less and less important whether I am afraid."
    ],
    [
        "author" => "Alexis Carrel",
        "quote" => "All great men are gifted with intuition. They know without reasoning or analysis, what they need to know."
    ],
    [
        "author" => "Mark Twain",
        "quote" => "To get the full value of joy you must have someone to divide it with."
    ],
    [
        "author" => "Johann Wolfgang von Goethe",
        "quote" => "Sometimes our fate resembles a fruit tree in winter. Who would think that those branches would turn green again and blossom, but we hope it, we know it."
    ],
    [
        "author" => "Leo Tolstoy",
        "quote" => "We lost because we told ourselves we lost."
    ],
    [
        "author" => "James Pence",
        "quote" => "Success is determined by those whom prove the impossible, possible."
    ],
    [
        "author" => "Agatha Christie",
        "quote" => "Good advice is always certain to be ignored, but that's no reason not to give it."
    ],
    [
        "author" => "Dale Earnhardt",
        "quote" => "The winner ain't the one with the fastest car it's the one who refuses to lose."
    ],
    [
        "author" => "Robert C. Solomon",
        "quote" => "Spirituality can be severed from both vicious sectarianism and thoughtless banalities. Spirituality, I have come to see, is nothing less than the thoughtful love of life."
    ],
    [
        "author" => "Sam Rayburn",
        "quote" => "No one has a finer command of language than the person who keeps his mouth shut."
    ],
    [
        "author" => "Denis Waitley",
        "quote" => "The only person who never makes mistakes is the person who never does anything."
    ],
    [
        "author" => "John Lennon",
        "quote" => "Life is what happens to you while you're busy making other plans."
    ],
    [
        "author" => "Jonathan Swift",
        "quote" => "Discovery consists of seeing what everybody has seen and thinking what nobody else has thought."
    ],
    [
        "author" => "Margaret Fuller",
        "quote" => "If you have knowledge, let others light their candles in it."
    ],
    [
        "author" => "Epictetus",
        "quote" => "It is impossible for a man to learn what he thinks he already knows."
    ],
    [
        "author" => "Will Rogers",
        "quote" => "If you find yourself in a hole, the first thing to do is stop digging."
    ],
    [
        "author" => "Plutarch",
        "quote" => "To make no mistakes is not in the power of man; but from their errors and mistakes the wise and good learn wisdom for the future."
    ],
    [
        "author" => "Lee Womack",
        "quote" => "I think you can have moderate success by copying something else, but if you really want to knock it out of the park, you have to do something different and take chances."
    ],
    [
        "author" => "Marcus Aurelius",
        "quote" => "Everything we hear is an opinion, not a fact. Everything we see is a perspective, not the truth."
    ],
    [
        "author" => "William Menninger",
        "quote" => "Six essential qualities that are the key to success: Sincerity, personal integrity, humility, courtesy, wisdom, charity."
    ],
    [
        "author" => "Lucille Ball",
        "quote" => "I have an everyday religion that works for me. Love yourself first, and everything else falls into line."
    ],
    [
        "author" => "Chuang Tzu",
        "quote" => "Flow with whatever is happening and let your mind be free. Stay centred by accepting whatever you are doing. This is the ultimate."
    ],
    [
        "author" => "Jane Addams",
        "quote" => "Nothing could be worse than the fear that one had given up too soon, and left one unexpended effort that might have saved the world."
    ],
    [
        "author" => "Aristotle",
        "quote" => "The energy of the mind is the essence of life."
    ],
    [
        "author" => "Horace",
        "quote" => "Begin, be bold, and venture to be wise."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "Give a man a fish and you feed him for a day. Teach him how to fish and you feed him for a lifetime."
    ],
    [
        "author" => "Francis Bacon",
        "quote" => "A wise man will make more opportunities than he finds."
    ],
    [
        "author" => "Eddie Cantor",
        "quote" => "Slow down and enjoy life. It's not only the scenery you miss by going too fast, you also miss the sense of where you are going and why."
    ],
    [
        "author" => "Wayne Dyer",
        "quote" => "Miracles come in moments. Be ready and willing."
    ],
    [
        "author" => "Sophocles",
        "quote" => "Numberless are the worlds wonders, but none more wonderful than man."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "So is cheerfulness, or a good temper, the more it is spent, the more remains."
    ],
    [
        "author" => "Francoise de Motteville",
        "quote" => "The true way to render ourselves happy is to love our work and find in it our pleasure."
    ],
    [
        "author" => "Wayne Dyer",
        "quote" => "When you judge another, you do not define them, you define yourself."
    ],
    [
        "author" => "Richard Bach",
        "quote" => "Argue for your limitations, and sure enough they're yours."
    ],
    [
        "author" => "Confucius",
        "quote" => "He who wishes to secure the good of others, has already secured his own."
    ],
    [
        "author" => "Plato",
        "quote" => "Wise men talk because they have something to say; fools, because they have to say something."
    ],
    [
        "author" => "Confucius",
        "quote" => "Life is really simple, but we insist on making it complicated."
    ],
    [
        "author" => "Jim Bishop",
        "quote" => "The future is an opaque mirror. Anyone who tries to look into it sees nothing but the dim outlines of an old and worried face."
    ],
    [
        "author" => "Carl Jung",
        "quote" => "Everything that irritates us about others can lead us to a better understanding of ourselves."
    ],
    [
        "author" => "Unknown",
        "quote" => "Beware of the half truth. You may have gotten hold of the wrong half."
    ],
    [
        "author" => "Elbert Hubbard",
        "quote" => "The greatest mistake you can make in life is to be continually fearing you will make one."
    ],
    [
        "author" => "Calvin Coolidge",
        "quote" => "I have never been hurt by anything I didn't say."
    ],
    [
        "author" => "Thomas Kempis",
        "quote" => "Be not angry that you cannot make others as you wish them to be, since you cannot make yourself as you wish to be."
    ],
    [
        "author" => "William Ward",
        "quote" => "Adversity causes some men to break, others to break records."
    ],
    [
        "author" => "Thomas Fuller",
        "quote" => "An invincible determination can accomplish almost anything and in this lies the great distinction between great men and little men."
    ],
    [
        "author" => "Abernathy",
        "quote" => "The industrial landscape is already littered with remains of once successful companies that could not adapt their strategic vision to altered conditions of competition."
    ],
    [
        "author" => "Christian Bovee",
        "quote" => "Example has more followers than reason."
    ],
    [
        "author" => "Epictetus",
        "quote" => "One that desires to excel should endeavour in those things that are in themselves most excellent."
    ],
    [
        "author" => "Mary Pickford",
        "quote" => "If you have made mistakes, there is always another chance for you. You may have a fresh start any moment you choose."
    ],
    [
        "author" => "Robert Pirsig",
        "quote" => "The only Zen you find on the tops of mountains is the Zen you bring up there."
    ],
    [
        "author" => "Doris Day",
        "quote" => "Gratitude is riches. Complaint is poverty."
    ],
    [
        "author" => "Richard Needham",
        "quote" => "Strong people make as many mistakes as weak people. Difference is that strong people admit their mistakes, laugh at them, learn from them. That is how they become strong."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "To know your purpose is to live a life of direction, and in that direction is found peace and tranquillity."
    ],
    [
        "author" => "Harriet Woods",
        "quote" => "You can stand tall without standing on someone. You can be a victor without having victims."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "Bad times have a scientific value. These are occasions a good learner would not miss."
    ],
    [
        "author" => "Unknown",
        "quote" => "It's not who you are that holds you back, it's who you think you're not."
    ],
    [
        "author" => "Pablo Picasso",
        "quote" => "All children are artists. The problem is how to remain an artist once he grows up."
    ],
    [
        "author" => "Philip Sidney",
        "quote" => "Either I will find a way, or I will make one."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "He who knows that enough is enough will always have enough."
    ],
    [
        "author" => "Ralph Emerson",
        "quote" => "The only way to have a friend is to be one."
    ],
    [
        "author" => "Anne Bradstreet",
        "quote" => "If we had no winter, the spring would not be so pleasant; if we did not sometimes taste of adversity, prosperity would not be so welcome."
    ],
    [
        "author" => "Marianne Williamson",
        "quote" => "Joy is what happens to us when we allow ourselves to recognize how good things really are."
    ],
    [
        "author" => "Carl Jung",
        "quote" => "Your vision will become clear only when you can look into your own heart. Who looks outside, dreams; who looks inside, awakes."
    ],
    [
        "author" => "Brian Tracy",
        "quote" => "There is never enough time to do everything, but there is always enough time to do the most important thing."
    ],
    [
        "author" => "Marian Edelman",
        "quote" => "You really can change the world if you care enough."
    ],
    [
        "author" => "Buddha",
        "quote" => "What you are is what you have been. What you'll be is what you do now."
    ],
    [
        "author" => "Gordon Hinckley",
        "quote" => "Our lives are the only meaningful expression of what we believe and in Whom we believe. And the only real wealth, for any of us, lies in our faith."
    ],
    [
        "author" => "Benjamin Haydon",
        "quote" => "There surely is in human nature an inherent propensity to extract all the good out of all the evil."
    ],
    [
        "author" => "Lao Tzu",
        "quote" => "Music in the soul can be heard by the universe."
    ],
    [
        "author" => "John Lubbock",
        "quote" => "What we see depends mainly on what we look for."
    ],
    [
        "author" => "Bruce Lee",
        "quote" => "To hell with circumstances; I create opportunities."
    ],
    [
        "author" => "Ella Wilcox",
        "quote" => "The truest greatness lies in being kind, the truest wisdom in a happy mind."
    ],
    [
        "author" => "John Junor",
        "quote" => "An ounce of emotion is equal to a ton of facts."
    ],
    [
        "author" => "Barbara De Angelis",
        "quote" => "We need to find the courage to say NO to the things and people that are not serving us if we want to rediscover ourselves and live our lives with authenticity."
    ],
    [
        "author" => "Lazurus Long",
        "quote" => "Great is the art of beginning, but greater is the art of ending."
    ],
    [
        "author" => "Wayne Dyer",
        "quote" => "Simply put, you believer that things or people make you unhappy, but this is not accurate. You make yourself unhappy."
    ],
    [
        "author" => "Maya Angelou",
        "quote" => "Nothing will work unless you do."
    ],
    [
        "author" => "Catherine Pulsifer",
        "quote" => "Our ability to achieve happiness and success depends on the strength of our wings."
    ],
    [
        "author" => "Theodore H. White",
        "quote" => "To go against the dominant thinking of your friends, of most of the people you see every day, is perhaps the most difficult act of heroism you can perform."
    ],
    [
        "author" => "Melody Beattie",
        "quote" => "Gratitude makes sense of our past, brings peace for today, and creates a vision for tomorrow."
    ],
    [
        "author" => "Byron Pulsifer",
        "quote" => "Into each life rain must fall but rain can be the giver of life and it is all in your attitude that makes rain produce sunshine."
    ],
    [
        "author" => "Harold Nicolson",
        "quote" => "We are all inclined to judge ourselves by our ideals; others, by their acts."
    ],
    [
        "author" => "Rodin",
        "quote" => "Nothing is a waste of time if you use the experience wisely."
    ],
    [
        "author" => "Aristotle",
        "quote" => "If one way be better than another, that you may be sure is natures way."
    ],
    [
        "author" => "Napoleon Hill",
        "quote" => "Here is one quality that one must possess to win, and that is definiteness of purpose, the knowledge of what one wants, and a burning desire to possess it."
    ],
    [
        "author" => "William Shakespeare",
        "quote" => "It is not in the stars to hold our destiny but in ourselves."
    ],
    [
        "author" => "Tony Robbins",
        "quote" => "Using the power of decision gives you the capacity to get past any excuse to change any and every part of your life in an instant."
    ],
    [
        "author" => "Abraham Lincoln",
        "quote" => "I will prepare and some day my chance will come."
    ],
    [
        "author" => "Tom Jackson",
        "quote" => "Sometimes the cards we are dealt are not always fair. However you must keep smiling and moving on."
    ]
        ];

        DB::table('inspirational_quotes')->insert($qoutes);
    }

}
