-- Add context_group column for grouping/filtering people
ALTER TABLE people
ADD COLUMN context_group VARCHAR(20) NULL;

-- Suggested values:
-- school: Bạn học (Cấp 3/Đại học)
-- work: Đồng nghiệp/Công việc
-- hobby: Cùng sở thích

-- Example updates:
-- UPDATE people SET context_group = 'school' WHERE met_from IN ('Chuyên Biên Hòa', 'FPT Polytechnic');
-- UPDATE people SET context_group = 'work' WHERE met_from LIKE '%Fatties Software%' OR met_from LIKE '%project%';
-- UPDATE people SET context_group = 'hobby' WHERE met_from LIKE '%bóng bàn%' OR met_from LIKE '%gym%' OR met_from LIKE '%lập trình%';
