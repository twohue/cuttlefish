<?php

namespace App\Custom;

use Illuminate\Support\Collection;
use Illuminate\Support\Stringable;

/*
                          .sS$$$$$$$$$$$$$Ss.
                        .sS$$$$$$$$$$$$$$$$$Ss.
                       .$$.$$$$$$$$$$$$$$$$$$$$s.
                      .$$$:$$$$$$$$$$$$$$$$$$$$$$Ss.
                    .$$$.'$$$$$$$$;~' `~~~~~~C$$$$$$s.
                  .$'$$:$$$$$$$$"'            `"$$$$$S.
               .S$$:$$:$$$$$$$'             _    `$$$$$s.
             .S$$:$$:$$$$$£$$'        __--~~  _    $$$$$$.
            .$$$$:$$:$$$$$$$'     _.-~    _.-~     `$$$$$$$.
          .$$$$$:$$:$$$$$$$'    -~    _.-~           `$$$$$$.
         .$$$$:$$:$$$$$$$$'    _.--~         ..s$$$$S.$$$$$$$s.
        .$$$$$:$$$:$$$$$$$     _..._        .$$$SSSSSS$$$$$$$$$.
       .$$$$$:$$$$:$$$$$$$    ~.sggg.        "  .~(g )$$$$$$$$$$.
       $$$$$:$$$$$:$$$$$$$ .sS$$$$$$$$s.     : '"--"' `$$$$$$$$$$.
       `$$$:$$$$$$:$$$$$$$.$$" .. g"-. `.    `.-.._    `$$$$$$$$$$
        $$$:$$$$$$:$$$$$$$`$' ' `._.'   :      `---      $$$$$$$$$.
        $$$:.$$$$$:$$$$$$$    `---'  _.'                 $$$$$$$$$$$.
        $$$$$:$$$$:$$$$$$s      ----"           .        $$$$$$$$$$$$.
        $$$$$`.$$$:$$$$$$$.                      `-._   .$$$$$$$$$$$$$$Sss.
        $$$$$$`;$$:$$$$$$$$.         _.:         .'   ;  $$$$$$$$$$$$$$$$$$$.
       .s$$$$$$'$$`.$$$$$$$$.      .'  `.       ' _ .`.  $$$$$$$$$$$$$$$$$$$$Ss.
     .s$$$$$$$$$$$$:$$$$$$$$$     :  _   ~~-...'.'.'  :  $$$$$$$$$$$$$$$$$$$$$$$
   .s$$$$$$$$$$$$$$`.$$$$$$$$s      : .~-,-.-.~:'.'   :  $$$$$$$$$$$$$$$$$$$$$$
 .s$$$$$$$$$$$$$$$$$`$$$$$$$$$$.    `  ~-.`"""'.'      `.$$$$$$$$$$$$$$$$$$$'
 $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$S.   .      `""'        $$$$$$$$$$$$$$$$$$'
 $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$S. `.                 $$$$$$$$$$$$$$$$'
 $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$Ss.`.              .$$$$$$$$$$$$$$'
 $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$Ss.          .s$$$$$$$$$$$$'
 $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$Ss......sS$$$$$$$$$$$'
 $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$'
 $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$'
 */
class Uninspired
{
    /**
     * Get uninspired!
     * A parody version of the Inspirational Quotes class from Laravel
     * @return string
     */
    public static function quote()
    {
        return static::formatForConsole(static::quotes()->random());
    }

    /**
     * Get the collection of inspiring quotes.
     *
     * @return \Illuminate\Support\Collection
     */
    public static function quotes()
    {
        return new Collection([
            "They say that happiness is like peeing your pants, everyone can see it, but only you can feel it's true warmth. - Unknown",
            "I drank *WHAT*? - Socrates",
            "Two things are infinite; the universe, and human stupidity; and I'm not sure about the universe. - Albert Einstein",
            "I love deadlines. I love the whooshing noise they make as they go by. - Douglas Adams, The Salmon of Doubt: Hitchhiking the Galaxy One Last Time",
            "Anyone who thinks that sitting in church can make you a Christian must also think that sitting in a garage can make you a car. - Garrison Keillor",
            "Women and cats will do as they pleas,e and men and dogs should relax and get used to the idea. - Robert A. Heinlein",
            "Whenever I feel the need to exercise, I lie down until it goes away. - Paul Terry",
            "If ignorance is bliss, I know too damn much. - Sasha Strange",
            "I never said you were ugly, what I said was 'wow, evolution can *really* hold a grudge'. - Sasha Strange",
            "The story so far: In the beginning, the Universe was created. This has made a lot of people very angry and has been widely regarded as a bad move. - Douglas Adams, The Restaurant at the End of the Universe",
            "Some people never go crazy. What truly horrible lives they must lead. - Charles Bukowski",
            "The trouble with having an open mind, of course, is that people will insist on coming along and trying to put things in it. - Terry Pratchett, Diggers",
            "Reality continues to ruin my life. - Bill Watterson, The Complete Calvin and Hobbes",
            "Go to heaven for the climate, and hell for the company. - Benjamin Franklin Wade",
            "The reason I talk to myself is because I'm the only one whose answers I accept. - George Carlin",
            "Have you ever notices that 'What the hell' is always the right decisions to make? - Terry Johnson, Insignificance",
            "Be careful about reading health books. Some fine day, you'll die of a misprint. - Markus Herz",
            "Fate is like a strange, unpopular restaurant filled with odd little waiters who bring you things you never asked for and don't always like. - Lemony Snicket",
            "Give a man a fire and he's warm for a day, but set fire to him, and he's warm for the rest of his life. - Terry Pratchett, Jingo",
            "The statistics on sanity are that one out of every four people is suffering from mental illness. Look at your 3 best friends. If they're ok, then it's you. - Rita Mae Brown",
            "'I don't want to be a man,' said Jace. 'I want to be an angst ridden teenager who can't confront his own inner demons and takes it out verbally on other people instead.' 'Well,' said Luke, 'you're doing a fantastic job.' - Cassandra Clare, City of Ashes",
            "All God does is watch us and kill us when we get boring. We must never, ever be boring. - Chuck Palahniuak, Invisible Monsters",
            "This life's hard, but it's harder if you're stupid. - George V. Higgins, The Friends of Eddie Coyle",
            "I refuse to answer that question on the grounds that I don't know the answer. - Douglas Adams",
            "When you're in jail, a good friend will be trying to bail you out. A best friend will be in the cell next to you saying, 'Damn, that was fun'. - Groucho Marx",
            "Some humans would do anything to see if it was possible to do it. If you put a large switch in some cave somewhere, with a sign on it saying 'End of the World Switch. PLEASE DO NOT TOUCH', the paint wouldn't even have time to dry. - Terry Pratchett, Theif of Time",
            "Two wrongs don't make a right, but they make a good excuse. - Thomas Szasz",
            "Substitute 'damn' every time you're inclined to write 'very'; your editor will delete it and the writing will be just as it should be. - Mark Twain",
            "Reader, suppose you were an idiot. And suppose you were a member of Congress. But I repeat myself. - Mark Twain",
            "I like work: it fascinates me. I can sit and look at it for hours. - Jerome K. Jerome",
            "There is a theory which states that if ever anyone discovers exactly what the Universe is for and why it is here, it will instantly disappear and be replaced by something even more bizarre and inexplicable. There is another theory which states that this has already happened. - Douglas Adams, The Restaurant at the End of the Universe",
            "I did not attend his funeral, but I sent a nice letter saying I approved of it. - Mark Twain",
            "I generally avoid temptation unless I can't resist it. - Mae West",
            "I was gratified to be able to answer promptly, and I did. I said I didn't know. - Mark Twain",
            "I think God, in creating man, somewhat overestimated his ability. - Oscar Wilde",
            "The fact that we live at the bottom of a deep gravity well, on the surface of a gas covered planet going around a nuclear fireball 90 million miles away and think this to be normal is obviously some indication of how skewed our perspective tends to be. - Douglas Adams, The Salmon of Doubt: Hitchhiking the Galaxy One Last Time",
            "Happiness is having a large, loving, caring, close knit family in another city. - George Burns",
            "People say nothing is impossible, but I do nothing every day. - A.A. Milne, Winnie-the-Pooh",
            "'The guide says there is an art to flying,' said Ford, 'or rather a knack. The knack lies in learning how to throw yourself at the ground, and miss.' - Douglas Adams, Life, The Universe and Everything",
            "Mom says it's because she has PMS. Do you even know what that means? 'I'm not a little kid anymore. It means pissed at men syndrome' - Nicholas Sparks, The Last Song",
            "If writers wrote as carelessly as some people talk, then adhasdh asdglaseuyt[bn[ pasdlgkhasdfasdf. - Lemony Snicket, Horseradish: Bitter Truths You Can't Avoid",
            "Right now I’m having amnesia and déjà vu at the same time. I think I’ve forgotten this before. - Steven Wright",
            "What would men be without women? Scarce, sir... Mighty scarce. - Mark Twain",
            "History will be kind to me for I intend to write it. - Winston S. Churchill",
            "Fighting for peace is like fucking for virginity - George Carlin",
            "When I was a boy of 14, my father was so ignorant I could hardly stand to have the old man around. But when I got to be 21, I was astonished at how much the old man had learned in seven years. - Mark Twain",
            "It is forbidden to kill; therefore all murderers are punished unless they kill in large numbers and to the sound of trumpets. - Voltaire",
            "I'm sure the universe is full of intelligent life. It's just been too intelligent to come here. - Arthur C. Clarke",
            "Say 'provoking' again. Your mouth looks provocative when you do. - Becca Fitzpatrick, Hush",
            "Have you ever noticed that anybody driving slower than you is an idiot, and anyone going faster than you is a maniac? - George Carlin",
            "The capacity for friendship is God's way of apologizing for our families. - Jay McInerney, The Last of the Savages",
            "Would it save you a lot of time if I just gave up and went mad now? - Douglas Adams, The Hitchhiker's Guide to the Galaxy",
            "Sometimes when I'm talking, my words can't keep up with my thoughts. I wonder why we think faster than we speak. Probably so we can think twice. - Bill Watterson",
            "From the moment I picked up your book until I put it down, I was convulsed with laughter. Some day, I intend reading it. - Groucho Marx",
            "Wisdom comes from experience. Experience is often a result of lack of wisdom. - Terry Pratchett",
            "Every now and then, I like to do as I'm told, just to confuse people. - Tamora Pierce, Melting Stones",
            "Never underestimate the power of stupid people in large groups. - George Carlin",
            "Confidence is ignorance. If you're feeling cocky, it's because there's something you don't know. - Eoin Colfer, Artemis Fowl",
            "If you want to know what God thinks of money, just look at the people he gave it to. - Dorothy Parker",
            "Love can change a person the way a parent can change a baby; awkwardly, and often with a great deal of mess. - Lemony Snicket, Horseradish: Bitter Truths You Can't Avoid",
            "If stupid actually burned, then at least there would be an upside to global warming. - Sasha Strange",
            "Some people have a way with words, and other people...oh, uh, not have way. - Steve Martin",
            "Women are like works of art, lovingly carved from the finest marble by master artisans with care and skill. Men... Men are sentient potatoes. - Sasha Strange",
            "I suspect that famous people tend to be stupid because the mediocre masses like to feel smart, albeit inconvenienced by fortune. - Sasha Strange",
            "I'm killing time while I wait for life to shower me with meaning and happiness. - Bill Watterson",
            "Good sex is like good Bridge. If you don't have a good partner, you'd better have a good hand. - Mae West",
            "The problem with men is that God gave them two heads, and only enough blood to run one at a time. - Robin Williams",
            "All you need in this life is ignorance and confidence; then success is sure. - Mark Twain",
            "If my doctor told me I only had six minutes to live, I wouldn't brood, I'd type a little faster. - Isaac Asimov",
            "I'll try anything once, twice if I like it, three times to make sure. - Mae West",
            "Write what you know. That should leave you with a lot of free time. - Howard Nemerov",
            "You can safely assume you've created God in your own image when it turns out that God hates all the same people you do. - Anne Lamott",
            "Half of seeming clever is keeping your mouth shut at the right times. - Patrick Rothfuss, The Wise Man's Fear",
            "Heterosexuality is not normal, it's just common. - Dorothy Parker"
        ]);
    }

    /**
     * Formats the given quote for a pretty console output.
     *
     * @param  string  $quote
     * @return string
     */
    protected static function formatForConsole($quote)
    {
        [$text, $author] = (new Stringable($quote))->explode('-');

        return sprintf(
            "\n  <options=bold>“ %s ”</>\n  <fg=gray>— %s</>\n",
            trim($text),
            trim($author),
        );
    }

}
