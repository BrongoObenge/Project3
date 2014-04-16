library(twitteR)
library(ROAuth)
library(RCurl)
library(rjson)
library(RPostgreSQL)


load("Auth1.Rdata")
options(RCurlOptions = list(cainfo = system.file("CurlSSL", "cacert.pem", package = "RCurl")))

registerTwitterOAuth(Dataminers)



##Connect met Database
"CONNECTING TO DATABASE"
drv <- dbDriver("PostgreSQL")
con <- dbConnect(drv, host='localhost', port='5432', dbname='Project3',
                 user='postgres', password='root')
"CRAWLING TWITTER"
##Crawl Twitter  
  test <- userTimeline('@TotalOVNL', n=50)

"SLEEPING 10 SECONDS"
    Sys.sleep(10)
"DONE"
  test1 <- twListToDF(test)
  TwitterData <- data.frame(test1$id, test1$text, test1$created)
##remove temp dataframe
  rm(test1)
  rm(test)
##Change names
  names(TwitterData)[1]<-"tweetid"
  names(TwitterData)[2]<-"tweetstext"
  names(TwitterData)[3]<-"tweetdatum"

"WRITING TO DATABASE"
##Schrijft de TwitterData naar naar "alletweets" tabel
dbWriteTable(con, c("project3","alletweets"), TwitterData, overwrite = T)
dbExistsTable(con, c("project3", "alletweets"))


##Filter tweets and put in table
dbGetQuery(con, "INSERT INTO project3.vertragingtweets(tweetid, tweettext, tweetdatum) SELECT tweetid, tweetstext, tweetdatum FROM project3.alletweets WHERE alletweets.tweetstext LIKE '%#Vertraging%';")

##Sluit connectie
dbDisconnect(con) 

"Done"






