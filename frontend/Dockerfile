# استفاده از image پایه Node.js
FROM node:16

# تنظیم پوشه کار
WORKDIR /app

# کپی کردن package.json و package-lock.json
COPY package*.json ./

# نصب وابستگی‌ها
RUN npm install

# کپی کردن بقیه فایل‌ها
COPY . .

# ساخت پروژه
RUN npm run build

# پورت مورد استفاده
EXPOSE 3000

# دستور اجرای پروژه
CMD ["npm", "start"]