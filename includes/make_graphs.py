import matplotlib.pyplot as plt
import pandas as pd
dataset = pd.read_csv('output2.csv')
ratings = dataset["Rating"].value_counts()
numbers = ratings.index
quantity = ratings.values

custom_colors = ["skyblue", "yellowgreen", 'tomato', "blue", "red"]
plt.figure(figsize=(10, 8))
patches, texts, pcts = plt.pie(quantity, labels=numbers, colors=custom_colors, autopct='%1.1f%%' )
# central_circle = plt.Circle((0, 0), 0.5, color='white')
fig = plt.gcf()
for i, patch in enumerate(patches):
  texts[i].set_color(patch.get_facecolor())

plt.setp(texts, fontweight=600)
# fig.gca().add_artist(central_circle)
plt.rc('font', size=15)
# plt.title("Distribution of Amazon Product Ratings", fontsize=20)
plt.savefig('pie.png',transparent=True)


# p=0
# ne=0
# def get_polar(n):
#     if (dataset['Rating'][n] >= 4) :
#         return 1       

# for i in range(len(dataset)-1):
#     if(get_polar(i)==1):
#         p+=1
#     else:
#         ne+=1
# fig = plt.figure()
# ax = fig.add_axes([0,0,1,1])
# langs = ['Positive', 'Negative']
# students = [p,ne]
# ax.bar(langs,students)
# plt.show()
# plt.savefig('bar.png',transparent=True)