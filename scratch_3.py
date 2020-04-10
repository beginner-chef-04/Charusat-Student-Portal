import requests
from bs4 import BeautifulSoup

url='https://www.youtube.com/watch?v=zjo9yFHoUl8'
source_code=requests.get(url)
plain_text=source_code.text

soup=BeautifulSoup(plain_text,features="html.parser")

for link in soup.find_all('a'):
    title=link.string
    href=link.get('href')
    #href='http://localhost/project2_mera/'+href
    print(href)
    print(title)