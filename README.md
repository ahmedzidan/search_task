=======Project task folder======
1_This project based on lumen and AMP framworks.
2_Steps to run this project.
2_1_Put project folder in your server or local server like xampp
2_2_You may need to run this command "composer update"
2_3_To run this command you should be in the project folder.
2_3_If you put project in your local machine like xampp browse the project like this "localhost/path_to_project_directory/"

3_I provide some images in images folder you can see it.
 

AMP folder contain two files.
1_index file for search input. 
2_search file to return result.

elasticsearch folder contain elasitic search.
1_index file to Indexing data source and retrive data based on matching filed 
2_what we will do next
2_1_ indexing data using curl "curl -H 'Content-Type: application/x-ndjson' -XPOST 'localhost:9200/shakespeare/_bulk?pretty' --data-binary @shakespeare.json
curl -H 'Content-Type: application/x-ndjson' -XPOST 'localhost:9200/_bulk?pretty' --data-binary @logs.jsonl"

2_2_ integrating elastic with project task.
 


