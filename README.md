Simple RSS Cache / Aggregator
Create a service that'll consume remote rss / xml feeds and save the items locally on its own database.
Backend service should run in console mode and will be executed by cron on predefined interval.
Rss feeds list has to be configurable, here is an example list:
https://usn.ubuntu.com/usn/rss.xml
https://threatpost.com/category/web-security/feed/
Data that needs to be stored to database:
  - source
  - link
  - title
  - description
  - date
Please note that the xml could have different structure, i.e feed A could have "description" in a <description /> node and feed B could have it in <article /> node.
Service design should consider this and allow easy implementation of new sources with no changes of existing code.
