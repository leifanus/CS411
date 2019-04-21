import numpy as np
import torch
import torch.nn as nn
import torch.nn.functional as F
import torch.optim as optim
#from torchvision import datasets, transforms
from torch.autograd import Variable

import h5py
import time
import copy
import os
import sys
import random
import pandas as pd


input_dim = 6
H = 3
Num_classes = 7
num_train = 8
epoches = 10000
scheduler_step_size = 4
scheduler_gamma = 0.5
LR = .01

data = pd.read_csv("Score.csv")
data = np.array(data)
X = np.array(data[:, 2:-1], dtype = np.float32)/100.0
Y = []
for i in range(len(X)):
	if data[i, 1]=='SDE':
		Y.append(0)
	elif data[i, 1]=='HardwareEngineer' or data[i, 1]=='Hardware Engineer':
		Y.append(1)
	elif data[i, 1]=='WebDeveloper' or data[i, 1]=='Web Developer':
		Y.append(2)
	elif data[i, 1]=='DataScientist':
		Y.append(3)
	elif data[i, 1]=='Cyber Security' or data[i, 1]=='CyberSecurity':
		Y.append(4)
	elif data[i, 1]=='Database Administrat' or data[i, 1]=='DatabaseAdmin':
		Y.append(5)	
	elif data[i, 1]=='ComputerArch':
		Y.append(6)	
Y = np.array(Y)
# print(Y)
# print(X.shape, len(Y))
# print(X)
# print(Y)

# print(train_data)
# print(train_label)
train_data = torch.tensor(X[:])
train_label = torch.tensor(Y[:])

# print(train_data)
# print(train_label)
def init_normal(m):
    if type(m) == nn.Linear:
        nn.init.uniform_(m.weight)

# Model
class Net(nn.Module):
    def __init__(self):
        super(Net, self).__init__()
        self.fc1 = nn.Linear(input_dim, H)
        self.fc2 = nn.Linear(H, Num_classes)
        self.bn = nn.BatchNorm1d(H)

    def forward(self, x):
        x = F.relu(self.fc1(x))
        x = self.bn(x)
        x = F.relu(self.fc2(x))
        return F.softmax(x)




model = Net()
model.apply(init_normal)   
# print(model(train_data))

#optimizer = optim.Adam(model.parameters(), lr=0.0001)
optimizer = optim.RMSprop(model.parameters(), lr=LR)
scheduler = torch.optim.lr_scheduler.StepLR(optimizer, step_size=scheduler_step_size, gamma=scheduler_gamma)

for epoch in range(epoches):
    scheduler.step()
    model.train()
    output = model(train_data)
    loss = F.nll_loss(output, train_label, size_average=True)
    loss.backward()
    optimizer.step()
    print(loss)
    prediction = output.max(1)[1]
    I_pred_full = (prediction == train_label[:] )
    accuracy_full = np.mean(I_pred_full.data.numpy())
    # print(I_pred_full)
    print(accuracy_full)

for param in model.parameters():
	print(param)


