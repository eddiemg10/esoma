<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::insert([
            [
                'tag' => 'educational',
            ],
            [
                'tag' => 'latest'
            ],
            [
                'tag' => 'kids'
            ],
            [
                'tag' => 'Kiswahili'
            ]
        ]);

        Category::insert([
            [
                'category' => 'Technology'
            ],
            [
                'category' => 'Health'
            ],
            [
                'category' => 'Education'
            ],
            [
                'category' => 'News'
            ],
            [
                'category' => 'Sports'
            ],
        ]);

        Post::insert([
            [
                'author' => 1,
                'title' => 'Effects of Technology on Education',
                'image' => 'OVG8vdYCm8i6G3Svv5WkxjNBEtCQv4xT2RhvkxIC.jpg',
                'slug' => 'techoneducation',
                'content' => '<p>We are living in a technology-driven world, whether for the better or worse. Since the 1980s, technology has continually evolved and increased its applications in businesses, institutions, and even our homes. The development and emergence of cellphones was a game changer in the history of technology – a technology that was easy to carry and fit in our pockets. The upward trajectory of technology has kept pace and will continue even in the years to come. The internet has brought us close together and brought us gigabytes of information within our reach inform of videos, images, audio, and text. Anything you think of, you can search it in your internet-enabled device and you will be served with information related to your query.</p><p><img src="https://esomake.co.ke/images/blog-images/1984-when-the-first-mobile-was-invented.jpg" alt="1984 - When the first mobile phone was invented"></p><p>This technology has enabled us handle tasks both simple and complex. Want to know how to cook a meal? There are recipes online. Want to learn about music? Learn from the best musicians whose lessons and works are available online. Want a book from your favorite author? Just ‘Google’ it. Want to repair a device yourself? YouTube- Google’s video platform- has videos of people demonstrating how to do it. The internet, and by far technology, has dominated many aspects of our lives including health, housing, transportation, and agriculture. What is the impact of the ever-evolving technology in the realm of education? Most of us have not fully comprehended how technology has affected education.</p><p>Most of the basic features of education have not changed – and might not change for a long time. In 14th Century, <a href="https://commons.wikimedia.org/wiki/File:Laurentius_de_Voltolina_001.jpg?_ga=2.135346225.1651076680.1638105489-2008754224.1638105489">Laurentius de Voltolina</a> illustrated a university lecture in medieval Italy. From the scene, the teacher is on a podium in front of the room and the students are seated in rows, some taking notes, others talking to each other, a few look bored, and one is clearly asleep. You can see the similarities between that illustration and today’s physical classroom. The only difference is that, in some instances, books have been replaced by laptops and mobile phones. The foundational system of a teacher instructing one or more students is still intact. In a system that is yet to adopt EdTech, a teacher still serves as the single source of information, which is passively received by learners. Further, physical books are continuing to be the source of information and a guide to teachers and students. Although it might seem like technology is still to impact education, there are some areas that technology has facilitated students’ learning and teachers’ teaching activities. Let us explore some ways through which technology has changed education.</p><h2><strong>Accessibility</strong></h2><p>Let us think of the persistent face-to-face education system. This system continues to exist around the globe and is more favored in some regions. For this system to work, a teacher and student are required to be physically present in the same location for learning to take place. However, we have borne witness to technology enabling a teacher to hold a lesson with students in different locations from each other. When schooling was interrupted due to the Covid-19 pandemic, most learning institutions, particularly in developed countries and regions, such as the USA, Australia, Canada, and Europe nations, seamlessly moved to the online space to conduct lessons. Further, people have been learning and advancing their studies online and getting awarded with Bachelor’s degrees, Masters, and even PHDs without ever stepping into a physical class. All thanks to technology, websites such as <a href="https://www.udemy.com/">Udemy</a>, <a href="https://www.coursera.org/">Coursera</a>, and <a href="https://www.khanacademy.org/">Khan Academy</a> have enabled students around the globe to acquire new information aside from what they are taught in class. These online schools systems have helped break down geographical barriers that have long prevented students learn from their education centers of choice.</p><h2><strong>Flexibility</strong></h2><p>As adults, we might be committed elsewhere and still wish to further our studies in a certain field or even add a skill such as cooking, art, knitting, and more. With online learning, we do not have to take time off our main commitments to pursue that which we consider important. As an online student, one has the freedom of setting and tailoring schedules in the 24-hour day. Online learning has removed the absolute necessity for physical books and course reading materials as these materials are available online and can be shared among students with the simple click of a button. Some materials can require to be purchased before being used and that’s where the common purchasing technologies come in. You can purchase learning materials online using PayPal, MasterCard and Visa cards issued by a bank, or even M-Pesa if in Kenya. There are over 20 major payment platforms that you can use to purchase a reading material –all from the comfort of your home. For instance, if you are interested by a new book by J.K Rowling (Famous for the Harry Potter books), you can search for the book in Amazon – a popular online store- buy it and have a hard copy sent to your address or sent as a soft copy by email, if supported. You do not have to be in the USA to get the book, you can simply shop for it here in Kenya. This is the extent that technology has facilitated education and learning.</p><h2><strong>Interactions between students and teachers: Communication and Collaboration</strong></h2><p>Back in the day, you had to wait to get to school to ask a teacher a question (If the question is in regards to your homework that day, you had be sited for late delivery). Today’s technological advances, including Email, SMS, and chat systems such as WhatsApp and Facebook Messenger enable students interact with their teachers in the online space, when a question or information is still fresh in their minds. Consider a scenario where you could encounter a Math problem, open WhatsApp on your mobile device, take a picture of it and send it to your older sibling on the other side of the country for assistance. Most of us could have scored higher homework points if this technology existed. Today’s student has this technology at his or her disposal. Whereas this unlimited form of communication is cheered for, one question remains: Are there elements of communication, such as the non-verbal cues, that are lost when using communication technologies? And if so, what is impact on the original message?</p><p><img src="https://esomake.co.ke/images/blog-images/quote-on-social-media-and-the-community.jpg" alt="Quote on Social Media and the Community by Simon Mainwaring"></p><p>In physical schools, we are used to the group work where we pull chairs round a table to engage on an assigned topic. The online space allows for collaboration using tools such as Google Docs, where members can work on a document concurrently.</p><h2><strong>Advent of Online Tests</strong></h2><p>A technology-powered testing system is recognized for its inability to be biased. Basic classroom tests are timed, delivered on a piece of paper, and observed for authenticity purposes. Online tests are timed and delivered on an app or website. There are various concerns for using online tests including the students’ authenticity and honesty. Can you real tell that the actual student is on the other side of the screen? If so, you can’t tell that he or she is not doing further research from books or the internet when answering questions. Unless these tests are done within school compounds under supervision, they can be easily compromised. However, tests can be administered online as a preparation to a final onsite test. Further, online tests are required to be multiple choice for it to be done and graded by the system. Else, a teacher will be required in the case of textual answers or those that require user input.</p><p>In conclusion, we have explored the various factors that have been influenced by technology in EdTech. As initially stated, the teacher has long served as the sole source of information. Inarguably, technology has eased access to learning content and information shifting the teacher’s role to “the guide on the side”. Students have been given additional roles and responsibilities for their own learning and research. Can technology be used to increase students’ attentiveness and enhance interactivity? There are many research studies done on the benefits and challenges of rolling out full scale EdTech in pre-primary, primary, secondary, and post-secondary studies.</p><p>We cannot ignore the negative impact of technology on education, particularly on matters, society. In a subsequent article, we will explore, in-depth, some of the negative influences of technology on education. As a highlight, the article will discuss distortion of student-teacher relationships, isolation of students in a digital and virtual world, deepening social inequalities between students and institutions that can afford the technology and those that cannot (the haves and the have-nots), and the deterioration of a student’s basic competencies in reading, writing, and math.</p>',
                'category' => 1,
                'published' => 0,
                
            ],
            [
                'author' => 1,
                'title' => 'Whither the Patch Machine',
                'image' => 'b8jbPyo2Lp3reJBVqF2JhJvkKFje61aSYPJ9MyZZ.jpg',
                'slug' => 'patchmachine',
                'content' => '<p>As a young boy growing up in Nairobi, the Nairobi School rugby team was amongst the dominant sides in schools rugby, it was a status symbol and a chic magnettoo. I grew up listening to hand me down tales of the legend Edward Rombo, stepping past an entire opposing team to score for the "Patch Machine".</p><p>My way older neighbours were "Patcherians", some on the rugby team, some supporters of the rugby team. Their tales drew me to the game of rugby way before my high school years, the way they would articulately spew out information about "Patchs" exploits, their rivalry with Lenana School (Changez) was big, in my opinion second only to the then existing Mean Machine-Nondies rivalry. With tales like these, it was this writers wish to go to and study at Nairobi School and play for the "Patch Machine."&nbsp;</p><p>As fate would have it, I would be shipped off to Western Kenya for my high school education, but even at my Kakamega outpost, I made the choice to play rugby, thanks in no small part to the proddings of ex-Patcherians, the late Tony Ambane (step-brother of current Kenya Sevens international Biko Adema) and my elder cousin the late John Amunga, a member of the 1993 Patch Machine.</p><p>As high school boys, we would marvel at the stories emanating from Nairobi School, albeit exaggerated but still worth a good listen. We would get to play Nairobi School at some point in high school, and in our ranks was a former Patcherian, duly dispatched to Kakamega High School to resit his fourth form examinations.&nbsp;</p><p>Game day and the ex-Patcherian tells us, " Walalalala! You guys are not gonna beat Patch. I know this team...we are doomed...lets just try to lose by a respectable margin". We promptly lost the match, that was the fear "Patch" instilled in an opponent back then.We lost that game purely because we were star struck and only realized that Patch were indeed human when our inside center Freddie Amunga sold an outrageous dummy, splitting the Patch defense open to score under the posts, but time was up. (This is a story for another day).</p><p>Impala RFC was my first port of call after high school. Here I would link up with Nairobi School players such as Aaron "Serge" Saariyo, Edward "Moose" Omuse, Rogers " Roji Roji" Odhiambo, Muriithi Nabea,Fred Mbeche, Alvin Rachier and Steve "Seniormost" Obondy. Teaming up with talent from Lenana school in the form of Mitch Ocholla, Timo Mbarine as well as Zeddy Akwanyi(Musingu), Wellington " Doink" &nbsp;Masasabi (Bungoma High), Donald Pendo (Maseno School) as we formed a formidable Impala Boks side that acquitted itself well in our maiden season, the Eric Shirley Shield,claiming a fourth place finish in our first season, before winning the title unbeaten the following season. Some of these players would break into the Impala Kenya Cup squad, some would leave the country for further studies. Bottom line, these were quality players especially the ones from Patch and Changez who had a strong rugby pedigree.</p><p>On the national team front, "Patch" produced an embarrassing array of players who donned the Kenya shirts. The list is long, really long, but I hope you get the point. This was a school, at least back in the day, that ate,slept and breathed rugby. They focused on academics too.&nbsp;</p><p>Fast forward to the present, Nairobi Schools "Patch Machine" is a pale shadow of the great sides of years gone by. No longer do they play rugby "to the uttermost". Could it be due to the fact that some latter day school administrations do not see the value of sports, focusing almost entirely on academics, hence their apathy in encouraging any sporting activity?&nbsp;</p><p>Whatever the case, it is surely sad to see Patch Machine wither away like a drying flower.</p><p><i>*PS Zimbabwes Prince Edward School, long the doyens of schoolboy rugby in Zimbabwe have been going through the same patch, no pun intended, and have appointed two former Zimbabwe internationals,Robbie Du Rand and the legendary Andy Ferreira to take charge of the team as they seek to return to glory. &nbsp;Thats just some food for though</i>t.&nbsp;</p><p><strong>Photo - 1994 Nairobi School Rugby team courtesy of Old Cambrians Society (The Nairobi School Alumni Association)</strong></p>',
                'category' => 1,
                'published' => 0,
                
            ],
            [
                'author' => 1,
                'title' => 'Mwanamke ni Shujaa',
                'image' => 'I2whSJjmfQOHlHHRNG71KSLI0DcypCjskLv0x4KN.png',
                'slug' => 'shujaa',
                'content' => '"<p><strong>Na Assumptah Wausi</strong></p><p>Mwanamke ni shujaa , biashara kakamka</p><p>Si wa jikoni malkia, hakika amechupuka</p><p>Tafuta ametambua, ki fedha anafaidika</p><p>Mwanamke kawa taa, na mlezi kadhalika&nbsp;</p><p>&nbsp;</p><p>Mwanamke chanjamaa, tia bidii hakika</p><p>Ziko nyingi vibarua, jaribu utainuka</p><p>Fanya kazi injinia, pesa benki weka</p><p>Mwanamke kawa taa, na mlezi kadhalika .</p><p>&nbsp;</p><p>Mwanamke karibia, kasumba acha haraka</p><p>Uza andazi kofia , jitahidi na damka</p><p>Yaache ya chekechea, changamana kamilika</p><p>Mwanamke kawa taa, na mlezi kadhalika.</p><p>&nbsp;</p><p>Mwanamke chokonoa, mwenzako nafasi nyaka</p><p>AWE kawa msaada, heko kote utawika</p><p>Mwanga wa familia , kurunzi pote limbika</p><p>Mwanamke kawa taa, na mlezi kadahalika.</p>"',
                'category' => 3,
                'published' => 0,
                
            ],
            [
                'author' => 1,
                'title' => 'Student Health Guide: College Students',
                'image' => 'ye5Xnz0j6VkhM8kQ2OmolpsYRT8urzVeHl1z0S3a.jpg',
                'slug' => 'studentshealth',
                'content' => '"<p>If you are a college student, you may be drinking too much, staying up too late and snacking on far too much junk food. Sure, it’s fun. But it’s also unhealthy. Check out these important health tips and concerns.</p><p><img src="https://www.drugwatch.com/wp-content/uploads/student-health-intro-780x0-c-default.jpg" alt="students outside studying"></p><p>In fall 2019, the National Center for Education Statistics reported that approximately 19.9 million students were expected to attend a U.S. college or university. And if you are currently one these college students in this statistic, you likely fall under a few other statistics as well.</p><p>A 2019 National College Health Assessment Report conducted by the American College Health Association (ACHA) found the major factors that most frequently occurred and most negatively impacted academic functioning for undergraduate students. These factors included stress, anxiety, sleep difficulties,depression and illness. Work, concerns for a troubled friend or family member, and internet use and computer games also ranked high.</p><p><strong>DID YOU KNOW?</strong></p><p>&nbsp;</p><p>57.5% of students experience more than average stress; academics, finances and sleep problems cause the most difficulties.</p><p>The students reported that academics, finances and sleep difficulties caused them extreme difficulty in the past year. Approximately 57.5 percent of the students experienced “more than average” or “tremendous” stress.</p><p>A 2018 report issued by the University of Minnesota Boynton Health Service, tasked with conducting a comprehensive survey on the health of college students, found that alcohol use continues to be a concern for universities and colleges. And <a href="https://www.drugwatch.com/health/mental-health/">mental health</a> results showed that depression and anxiety were the two most frequently reported diagnoses of students, with 45.1 percent of students being diagnosed with a mental health condition of any kind in the past 12 months.</p><p><img src="https://www.drugwatch.com/wp-content/uploads/student-nutrition-hero-780x0-c-default.jpg" alt="nutritional meal on cafeteria plates"></p><h2>Nutrition</h2><p>Every college student has likely heard of “The Freshman 15.” But in 2008, a study supported by the National Institutes of Health (NIH) challenged that notion and discussed that the evidence for the phenomenon is limited.</p><p>In fact, the authors of the study observed an average weight gain of about 2.7 pounds among unmarried freshman students living on-campus, with about 50 percent of the students gaining weight and another 15 percent losing weight. Men were observed to have gained more weight than women.</p><p>The study did conclude, however, that freshman weight gain was 5.5 times greater than that of the general population.</p><p><strong>FRESHMAN WEIGHT GAIN</strong></p><p>&nbsp;</p><p>A study published in 2015 showed that freshman weight gain is still an issue, with about two-thirds of students gaining weight during their first year of college.</p><p>A 2015 analysis of studies showed that freshman weight gain is still an issue, with about two-thirds of students gaining weight during their first year of college. However, this study recorded the amount gained in the first year at closer to seven pounds, with the majority of the weight being gained in the first term.</p><p>The authors of the analysis concluded, “Given adolescent weight gain is highly linked to overweight and obesity in adults, a better understanding of university student weight gain is crucial if we are to combat the rising adult obesity prevalence.”</p><h3>Why Is It a Problem?</h3><p>The Washington Post published an article in 2016 that attributed the weight gain in freshman students to “generous meal plans, large portions, binge drinking, heavy snacking, more stress and less physical activity.” The author of the article concluded, “Any adult following that unhealthy lifestyle would gain weight, too.”</p><p>The authors of the 2015 analysis stated, “In those late adolescent years and early adulthood, transition from secondary school to university is a critical and vulnerable period for body weight changes and unhealthy lifestyle adoption… Given adolescence weight gain is highly linked to overweight and obesity in adults, the significant weight gain at university needs to be further understood if we are to combat the rising adult obesity prevalence.”</p><p><strong>FORMING BAD HABITS</strong></p><p>&nbsp;</p><p>The study found that weight gain and unhealthy lifestyle habits occurring in the college years were likely to persist into adulthood.</p><p>The authors noted that according to the World Health Organization (WHO), obesity has reached “epidemic proportions.” WHO reported that approximately 1.4 billion people worldwide are overweight, and another 300 million individuals are considered clinically obese.</p><p><strong>People who are overweight and/or obese are at an increased risk of developing the following conditions:</strong></p><ul><li>Type 2 diabetes</li><li>High blood pressure</li><li>High cholesterol</li><li>Heart disease</li><li>Stroke</li><li>Cancer</li><li><a href="https://www.drugwatch.com/health/sleep-apnea/">Sleep apnea</a></li><li>Osteoarthritis</li><li>Fatty liver disease</li><li>Kidney disease</li><li>Pregnancy problems (for the mother and the child)</li></ul><p>The 2018 University of Minnesota Boynton Health Services study found that nearly two-fifths or 43.1 percent of the students surveyed fell within the categories of being overweight or obese.</p><p><img src="https://www.drugwatch.com/wp-content/uploads/health-nutrition-statistic-640x0-c-default.png" alt="Nutrition Diagram"><i>Two-fifths or 43.1% of the students fall within the categories of being overweight or obese while attending college.</i></p><p>&nbsp;</p>"',
                'category' => 2,
                'published' => 0,
                
            ]
        ]);

        PostTag::insert([
            [
            'post_id' => 1,
            'tag_id' => 1
            ],
            [
            'post_id' => 1,
            'tag_id' => 2
            ],
            [
            'post_id' => 2,
            'tag_id' => 1
            ],
            [
            'post_id' => 3,
            'tag_id' => 4
            ],
            [
            'post_id' => 4,
            'tag_id' => 1
            ]
        ]);


    }
}