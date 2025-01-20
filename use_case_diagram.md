# Use Case Diagram

```mermaid
flowchart TD
  Manager[مدیر انبار] -->|افزودن کالا| AddGoods(افزودن کالا)
  Manager -->|کاهش کالا از انبار| RemoveGoods(کاهش کالا از انبار)
  Manager -->|مشاهده موجودی کالا| CheckInventory(مشاهده موجودی کالا)

  Employee[کارمند انبار] -->|ورود کالا به انبار| ReceiveGoods(ورود کالا به انبار)
  Employee -->|خروج کالا از انبار| ExitGoods(خروج کالا از انبار)

  Admin[مدیر سیستم] -->|تنظیمات دسترسی| AccessSettings(تنظیمات دسترسی)
  Admin -->|گزارشات مدیریتی| ManagementReports(گزارشات مدیریتی)

  User[کاربر] -->|مشاهده موجودی کالا| ViewInventory(مشاهده موجودی کالا)
