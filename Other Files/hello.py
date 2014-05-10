print "Start"
committees = ['European Court of Human Rights','UN General Assembly - 11th Emergency Session', 'Nuclear Security Summit','Department of Peacekeeping Operations', 'United Nations Security Council',"Pinochet's Chile",'Chevron Executive Board','Sri Lanka:2006','Ad-Hoc','CIA','MSS','Mossad','VEVAK']
imgList = ['echr.jpg','unga.jpg','nss.jpg','dpko.jpg','unsc.jpg','chile.jpg','chevron.jpg','srilanka.jpg','adhoc.jpg','cia.jpg','mss.jpg','mossad.jpg','vevak.jpg']
contentList = ["The European Court of Human Rights is the legal body based on the European Convention on Human Rights. The Court plays a crucial role in Europe to further liberal democratic values of human rights. The freedom of religion, pertaining to the cases for the committee, is protected under Article 9 - the freedom of thought, conscience and religion. However, the terms of the Article are often contested and the Court has been criticized for its lack of a systematic approach. UCBMUN XVIII will examine two cases focusing on Article 9: Leyla Sahin v Turkey and Lautsi v Italy",
              "UN GA Emergency Special Sessions take place when a crisis occurs that demands immediate solutions to maintain international peace and stability. Emergency sessions can be convened when requested by seven members of the Security Council or by a majority of the members of the UNGA. They occur within 24 hours of the request, with 10 sessions assembled thus far. UCBMUN's 11th Emergency Special Session will be centered on a crisis situation in Myanmar. Delegates must work to resolve ethnic conflict in Myanmar, while working with Myanmar's government to ensure that it will continue on its path towards open democracy",
              "The Nuclear Security Summit is a high-level meeting, attended by heads of states and governments,to strengthen measures to prevent nuclear terrorism and ensure the safety of nuclear materials. In the 21st century, the emergence of new actors in the world order brings both new opportunities and new threats. The proliferation of nuclear technologies and materials creates additional opportunities that these technologies and materials may fall into dangerous hands. While the chances of terrorists carrying out a nuclear attack are slim, the consequences would be enormous. Thus, the NSS was conceived to respond to 21st century nuclear threats.",
              "The Department for Peacekeeping Operations is in charge of planning, preparing, managing, and directing UN Peacekeeping operations. It is significantly responsible for implementing Security Council mandates. DPKO is split into four main offices: the Office of Operations, the Office of the Rule of Law and Security Institutions, the Office of Military Affairs, and Policy Evaluation and Training Division. Currently, the DPKO leads 16 different peacekeeping missions in nations across Africa, the Caribbean, the Middle East, Americas, Europe and Asia. UCBMUN XVIII will feature DPKO's involvement in the countries of Sudan and Kosovo",
              "This year, the UNSC crisis committee will combine the power plays of the P5 with the unpredictability of an ad hoc, focusing on the global interconnections of interests, influence, and intervention. While the crisis staff will provide delegates with a range of headlining topics, the UNSC will not be solely on one issue, but on a range of interacting world crises. Whether it be the crisis in Syria, resource conflict in the Congo, political destabilization in Uzbekistan, or escalating tensions in North Korea, get ready for a whirlwind of political intrigue, shifting alliances, and the ramifications of our globalized society.",
              "Pinochet's Chile aims to bring about the complex political climate in South America as the world is fixed upon the two superpowers, the United States and Soviet Union. What is sometimes forgotten was the significant implication of this bipolar world had on the regions classified 'at the periphery.' Pinochet's Chile looks at the notorious administration that (illegally) succeeded the shunned socialist government (you can thank Richard Nixon here) and begins in the midst of a vigilant and sensitive time-period. Delegates will regulate and dictate Pinochet's policies, determining the trajectory of a Chile with a weak-economy and with citizens fearing for their lives",
              "This year's Chevron Executive Board committee promises a dynamic and creative weekend. Delegates of this committee will be expected to navigate their way through the many challenges such a large corporation faces, ranging from profit losses, to media scandals, to environmental lobbyists. Each board member and a few large shareholders will be running the day-to-day operations of Chevron, and will be expected to follow the larger policy directions of the company.",
              "Between the periods of 2006 to 2009, the Democratic Socialist Republic of Sri Lanka tackled one of the most violent civil wars ever seen in its history. Sri Lanka 2006 is a committee that seeks to reformulate the events of the Sri Lankan civil war and it's outcomes that transpired as a result of the preexisting tensions between the Tamil Tigers and the militant government of Sri Lanka. In short, the delegates should come prepared to enter the thrilling world of power, politics, manipulation, and intense debate.",
              "Ad-Hoc is an extremely intense and competitive crisis committee. Delegates will receive the committee agenda and the background guide only a few days before the conference, and there will be an application process to get in. In this committee, you will make points and motions, write crisis notes, and point at people, and say things. You may even go the bathroom during unmod. In short, we can't tell you much about the committee, besides the fact that it's going to be one of the greatest committees you've ever experienced.",
              "While exploring problems such as the Iranian nuclear problem, a rising China, and a belligerent Israeli leadership, the CIA will be uniquely poised to engage on all fronts and will likely be a dominant force. While this can be seen as a blessing, unchecked power will not go unnoticed. Balancing national sovereignty with the desire to address these issues will be an ongoing struggle throughout the committee.",
              "A slowing economic engine and high profile scandals have done little to limit the true power of China on the global front. China's position as the dominant super power in the east and counterbalance to the United States will be especially important in this four-way joint crisis. China's interest in the Middle East and developing countries will be seen extremely well through the lens of the Israeli-Iranian conflicts.",
              "As Mossad, Israel's Institute for Intelligence and Special Operations, you will be responsible for counterterrorism, intelligence collection and covert operations relevant to Israel's national interests. Simultaneously, you will have to manage your interactions with, and keep track of the other three intelligence agencies in the joint crisis. The committee looks to be abounding in both substance and excitement.",
              "As a committee, VEVAK's goal is to ensure that Iran's foreign and domestic interests are well represented in the international sphere. Delegates are expected to safeguard Iran against the threats posed by enemies of the state whilst cooperating with allied states to achieve Iran's domestic and international objectives. Given the tensions resulting from Iran's nuclear program, preventing any setbacks in the nation's nuclear development will be key to Iran's ascent as a global power. Delegates must also keep in mind that the world is wary of Iran's power and thus must be prepared to combat anything from cyber attacks to political infiltration. Your strategies will be crucial in determining Iran's position in the international community. Do not underestimate the importance of this duty. ", 
]
count = 0
for committee in committees:
  file = open('committee'+str(count)+'.php', 'wb+')
  file.write("<html>\n")
  file.write("<head>\n")
  file.write("<meta charset='utf-8'>\n")
  file.write("<title>" + committee + " | UCBMUN XVIII</title>\n")
  file.write("<?php include('head.php'); ?>")
  file.write("</head>\n")

  file.write("<body>\n")
  file.write("<?php include('menu.php'); ?>\n")
  file.write("<div class='mainDiv'><center><h1 style='color:#ffffff'>" + committee + " </h1></center></div>\n")
  file.write("<div class='row'>\n")
  if count != 0:
    file.write("<div class='pull-left' style='margin-left:15px'>\n")
    file.write("<a href='committee"+str(count-1)+".php'><h6>"+committees[count-1]+"</h6></a>\n")
    file.write("</div>\n")
  if count != len(committees)-1:
    file.write("<div class='pull-right' style='margin-right:15px'>\n")
    file.write("<a href='committee"+str(count+1)+".php'><h6>"+committees[count+1]+"</h6></a>\n")
    file.write("</div>\n")
  file.write("</div>\n")

  file.write("<div class='row'>\n")
  file.write("<div class='span5 offset1'><img class='img-polaroid' width='420px' height='auto' src='img/committeePictures/"+imgList[count]+"'/></div>\n")
  file.write("<div class='span6 well'><p>" + contentList[count] + "</p></div>\n")
  file.write("</div>\n")

  file.write("<script src='http://code.jquery.com/jquery.js'></script>\n")
  file.write("<script src='js/bootstrap.min.js'></script>\n")
  file.write("</body>\n")
  file.write("</html>")
  file.close();
  count += 1
print "Done"