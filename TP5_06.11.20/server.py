
import http.server
import socketserver
import os

f = open("index.html", 'w')
htmlCode = "<html><head><title>Python is awesome!</title></head><body><h1>html python server %s" % (os.getenv('HOSTNAME'))
htmlCode += "</h1><p>Congratulations! The HTTP Server is working!</p></body></html>"
f.write(htmlCode)
f.close()

PORT = 8080
Handler = http.server.SimpleHTTPRequestHandler

with socketserver.TCPServer(("", PORT), Handler) as httpd:
    print("serving at port", PORT)
    httpd.serve_forever()
